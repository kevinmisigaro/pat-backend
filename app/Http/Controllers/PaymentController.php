<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Payment, Applicant};
use Illuminate\Support\Facades\{Auth, Validator};
use App\Http\Controllers\{MailController, ReceiptController};

class PaymentController extends Controller
{
    public function getPayments(){
        $payments = Payment::with('user.applicant')->orderBy('id', 'desc')->get();
        return view('dashboard.payments', \compact('payments'));
    }

    public function paymentConfirm($id){
        $payment = Payment::where('id', $id)->with('user.applicant')->first();

        $payment->update([
            'confirmed' => !$payment->confirmed
        ]);

        $applicant = Applicant::where('id', $payment->user->applicant->id)->first();

        $applicant->update([
            'payed' => !$applicant->payed
        ]);

        if($payment->confirmed == true){
            $recieptController = new RecieptController();
            $recieptController->createReceipt($id);    

            $name = $payment->user->name;

            \session()->flash('success', "Successful confirmation for $name");
        }

        return back();
    }
    
    public function payment(Request $request){

        $validator = Validator::make($request->all(), [
            'amount' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Enter amount');
            return back();
        }

        if($request->hasFile('image')){
            $img_ext = $request->file('image')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $imagePath = $request->file('image')->move(public_path('payment'), $filename);//image save public folder

            Payment::create([
                'user_id' => Auth::id(),
                'image' => $filename,
                'amount' => (float)$request->amount,
                'message' => $request->message
            ]);

            $mailController = new MailController();
            $mailController->sendMessage("Payment submitted", Auth::user()->email, "You have submitted payment.
             We shall contact you with your reciept once it has been confirmed confirmed.");

            \session()->flash('success', 'Payment confirmation submitted');
            return back();
        }

       if($request->has('message')){
        Payment::create([
            'user_id' => Auth::id(),
            'amount' => (float)$request->amount,
            'message' => $request->message
        ]);

        \session()->flash('success', 'Payment confirmation submitted');
        return back();
       }

       \session()->flash('error', 'Please upload image or message');
        return back();

    }
}
