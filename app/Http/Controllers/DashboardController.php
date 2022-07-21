<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Document, Applicant, Theme};
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Controllers\MailController;

class DashboardController extends Controller
{
    public function main(){
        $applicants = User::where('role', 2)->count();
        $reviewers = User::where('role',3)->count();
        $reviewedDocs = Document::where('review_complete', true)->count();
        $allDocs = Document::count();

        return view('dashboard.home', \compact('applicants','reviewers','allDocs', 'reviewedDocs'));
    }

    public function applicantStore(Request $request){
        $validator = Validator::make($request->all(), [
            'theme' => 'required',
            'abstract' => 'required',
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all details');
            return back();
        }

        $applicant = Applicant::where('user_id', Auth::id())->first();

        $wordCount = str_word_count(file_get_contents($request->abstract));

        if($request->hasFile('abstract')){
            $img_ext = $request->file('abstract')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $imagePath = $request->file('abstract')->move(public_path('documents'), $filename);//image save public folder
        }

        $applicant->update([
            'title' => $request->title,
            'theme_id' => $request->theme,
            'document' => $filename,
            'coauthor' => $request->author
        ]);

        Document::create([
            'applicant_id' => $applicant->id,
        ]);

        $body = "<html>
        You have successfully submitted your abstract. <br>
         Please wait for your review and check here for periodic updates.<br><br>
         Kind regards,<br>
         Paediatric Association of Tanzania.
        </html>";

        $mailController = new MailController();
        $mailController->sendMessage('Successful abstract submission',Auth::user()->email,$body);

        session()->flash('success', 'Document uploaded');

        return back();
    }

    public function applicants(){
        $applicants = User::where('role', 2)->with(['applicant.document', 'applicant.country'])->orderBy('id', 'desc')->get();
        $reviewers =  User::where('role', 3)->orderBy('name', 'asc')->get();

        return view('dashboard.applicants', \compact('applicants','reviewers'));
    }

    public function reviewers(){
        $reviewers = User::where('role', 3)->orderBy('id', 'desc')->get();
        return view('dashboard.reviewers', \compact('reviewers'));
    }
    
    public function document($id){
        $applicant = Applicant::where('id', $id)->with(['user','theme'])->first();
        $document = Document::where('applicant_id', $applicant->id)->with('comments')->first();

        return view('dashboard.document', \compact('applicant', 'document'));
    }

    public function assignReviewer(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'reviewer' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all data');
            return back();
        }

        $document = Document::where('applicant_id', $request->id)->first();

        $document->update([
            'reviewer_id' => $request->reviewer
        ]);

        session()->flash('success', 'Document assigned');

        return back();
    }

    public function editAbstract(){
        $applicant = Applicant::where('user_id', Auth::id())->first();
        $themes = Theme::all();

        return view('dashboard.abstract-reupload', \compact('applicant','themes'));
    }

    public function updateAbstract(Request $request){
        $validator = Validator::make($request->all(), [
            'theme' => 'required',
            'abstract' => 'required',
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all details');
            return back();
        }

        $applicant = Applicant::where('user_id', Auth::id())->first();

        $wordCount = str_word_count(file_get_contents($request->abstract));

        if($request->hasFile('abstract')){
            $img_ext = $request->file('abstract')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $imagePath = $request->file('abstract')->move(public_path('documents'), $filename);//image save public folder
        }

        $applicant->update([
            'title' => $request->title,
            'theme_id' => $request->theme,
            'document' => $filename,
            'coauthor' => $request->author
        ]);

        $body = "<html>
        You have successfully submitted your abstract. <br>
         Please wait for your review and check here for periodic updates.<br><br>
         Kind regards,<br>
         Paediatric Association of Tanzania.
        </html>";

        $mailController = new MailController();
        $mailController->sendMessage('Successful abstract submission',Auth::user()->email,$body);

        session()->flash('success', 'Document uploaded');

        return back();
    }

    public function displayUploadAbstract(){
        $themes = Theme::all();
        return view('dashboard.upload-abstract',\compact('themes'));
    }

    public function payment($applicantID){
        $applicant = Applicant::where('id', $applicantID)->first();

        $applicant->update([
            'payed' => !$applicant->payed
        ]);

        session()->flash('success', 'Payment status updated');
        return back();
    }


    public function yourReviews(){
        $applicants = User::where('role', 2)->with('applicant.document')
        ->whereHas('applicant.document',  function(Builder $query){
            $query->where('reviewer_id', Auth::id());
        })
        ->orderBy('id', 'desc')->get();

        return view('dashboard.yourreviews', \compact('applicants'));
    }

    public function contact(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all data');
            return back();
        }

        $body = "
        <html>
        Someone has contacted you via the website contact form.<br>
        Here are there details:<br><br>

        Name: $request->name <br>
        Phone: $request->phone <br>
        Email: $request->email <br>
        Message: $request->message

        </html>";

        $mailController = new MailController();
        $mailController->sendMessage('New message','info@pediatrics.or.tz', $body);

        return back();
    }

    public function markDocument(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'marks' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all data');
            return back();
        }

        $applicant = Applicant::where('id', $request->id)->first();

        if($applicant->review_complete){
            session()->flash('error', 'Review is already done');
            return back();
        }

        $document = Document::where('applicant_id', $applicant->id)->first();

        $document->update([
            'marks' => $request->marks,
            'review_complete' => true,
            'reviewer_id' => Auth::id()
        ]);

        session()->flash('success', 'Review complete');

        return back();

    }
}
