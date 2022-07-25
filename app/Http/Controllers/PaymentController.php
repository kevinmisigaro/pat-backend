<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Payment, Applicant};
use Illuminate\Support\Facades\Auth;
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

        $client = new Party([
            'name'          => 'Paediatric Assosication of Tanzania',
            'phone'         => '+255754047857',
        ]);

        $customer = new Party([
            'name'          =>  $payment->user->name,
            'phone'         =>  $payment->user->phone
        ]);

        $items = [
            (new InvoiceItem())
                ->title('Payment of attendance')
                ->description('Your product or service description')
                ->pricePerUnit($payment->amount)
                ->quantity(1)
        ];

        $notes = [
            'You can use this receipt to present to PAT as a confirmation of payment',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make('receipt')
        // ability to include translated invoice status
        // in case it was paid
        ->status(__('invoices::invoice.paid'))
        ->sequence(1)
        ->seller($client)
        ->buyer($customer)
        ->date(now())
        ->dateFormat('m/d/Y')
        ->payUntilDays(1)
        ->currencySymbol('Tshs')
        ->currencyCode('TZS')
        ->currencyFormat('{SYMBOL}{VALUE}')
        ->currencyThousandsSeparator('.')
        ->currencyDecimalPoint(',')
        ->filename($customer->name)
        ->addItems($items)
        ->notes($notes)
        // ->logo(public_path('patlogo.png'))
        // You can additionally save generated invoice to configured disk
        ->save('public');

        $name = $payment->user->name;

        \session()->flash('success', "Successful confirmation for $name");

        return back();
    }
    
    public function payment(Request $request){

        if($request->hasFile('image')){
            $img_ext = $request->file('image')->getClientOriginalExtension();
            $filename = time() . '.' . $img_ext;
            $imagePath = $request->file('image')->move(public_path('payment'), $filename);//image save public folder

            Payment::create([
                'user_id' => Auth::id(),
                'image' => $filename,
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
            'message' => $request->message
        ]);

        \session()->flash('success', 'Payment confirmation submitted');
        return back();
       }

       \session()->flash('error', 'Please upload image or message');
        return back();

    }
}
