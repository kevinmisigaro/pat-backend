<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Facades\Auth;
use App\Models\{Payment, User};

class RecieptController extends Controller
{
    public function createReceipt($paymentID){

        $payment = Payment::where('id', $paymentID)->with('user')->first();

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
        ->logo(public_path('patlogo.png'))
        // You can additionally save generated invoice to configured disk
        ->save('public');
    }
}
