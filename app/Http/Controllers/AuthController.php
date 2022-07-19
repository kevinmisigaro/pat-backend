<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Applicant, Document, Country, Theme};
use Illuminate\Support\Facades\{Validator, Hash, Auth};
use App\Http\Controllers\MailController;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) { 
            return redirect('/home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(){
        $countries = Country::all();
        $themes = Theme::all();
        return view('auth.register', \compact('countries','themes'));
    }

    public function registerStore(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'password' => 'required',
            'reason' => 'required',
            'work' => 'required',
            'profession' => 'required',
            'region' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all details');
            return back();
        }

        $user = User::create([
            'name' => $request->fname.' '.$request->lname,
            'email' => $request->email,
            'role' => 2,
            'password' => Hash::make($request->password)
        ]);

        $applicant = Applicant::create([
            'user_id' => $user->id, 
            'mct_number' => $request->mct_number, 
            'dob' => $request->dob,
            'country_id' => $request->country,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'application_reason' => 1,
            'affilication' => $request->affiliation,
            'work' => $request->work,
            'profession' => $request->profession,
            'region' => $request->region
        ]); 
 
        // if (Auth::attempt([
        //     'email' => $request->email, 
        //     'password' => $request->password])) { 
        //     return redirect('/home');
        // }

        session()->flash('success', 'Registration confirmed. Proceed to login');
        return back();

    }

    public function storeReviewer(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter all data');
            return back();
        }

        User::create([
            'name' => $request->name,
            'role' => 3,
            'email' => $request->email,
            'password' => Hash::make('pat1234')
        ]);

        $mailController = new MailController();
        $mailController->sendMessage('Reviewer message',$request->email,"<html>
        You have been selected to review abstracts by the PAT board. 
        Your current password is pat1234.<br><br>

        Please head to https://pat.co.tz/login to log in. <br><br>

        Kind regards,<br>
        Paedriactic Association of Tanzania.
        </html>");

        session()->flash('success', 'Reviewer added');

        return \redirect()->back();
    }

    public function applicantStore(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users',
            'document' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'country' => 'required',
            'theme' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 2
        ]);

        if($request->hasFile('document')){
            $img_ext = $request->file('document')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $imagePath = $request->file('document')->move(public_path('documents'), $filename);//image save public folder
        }

        $applicant = Applicant::create([
            'user_id' => $user->id, 
            'mct_number' => $request->mct_number, 
            'document' => $filename,
            'dob' => $request->dob,
            'country' => $request->country,
            'phone' => $request->phone,
            'theme' => $request->theme,
            'gender' => $request->gender
        ]); 

        Document::create([
            'applicant_id' => $applicant->id,
        ]);

        session()->flash('success', 'Details uploaded');

        return redirect('/');

    }

    public function logout()
    {
        Auth::logout();    
        return redirect('/');
    }
}
