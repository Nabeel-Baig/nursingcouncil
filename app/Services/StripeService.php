<?php

namespace App\Services;

use App\Http\Requests\donations\StoreDonationRequest;
use App\Mail\OrderDonation;
use App\Models\Payment;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StripeService {
    public function stripeCreate(StoreDonationRequest $request)
    {
        try {
            $order_id = IdGenerator::generate(['table' => 'orders', 'field' => 'order_id', 'length' => 6, 'prefix' => 'INV-']);
            $order = \App\Models\Order::create([
                'user_id' => (Auth::check()) ? auth()->user()->id : NULL,
                'fund_id' => (int)$request->input('fund_id'),
                'order_id' => $order_id,
                'name' => $request->name,
                'email' => $request->email,
                'country' => $request->country,
                'zipcode' => $request->zipcode,
                'description' => $request->description,
                'amount' => $request->amount,
                'payment_status' => 'Unpaid'
            ]);
            $order->save();
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $customer = \Stripe\Charge::create([
                "amount" => (float)$request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => $request->description
            ]);
            if ($customer->status == 'succeeded') {
                $order->payment_status = 'Paid';
                $order->save();
                $payment = new Payment();
                $payment->user_id = $order->user_id;
                $payment->order_id = $order->id;
                $payment->stripe_id = $request->stripeToken;
                $payment->amount = $request->amount;
                $payment->balance_transaction = $customer->balance_transaction;
                $payment->currency = $customer->currency;
                $payment->description = $customer->description;
                $payment->payment_id = $customer->id;
                $payment->country = $customer->source->country;
                $payment->exp_month = $customer->source->exp_month;
                $payment->exp_year = $customer->source->exp_year;
                $payment->fingerprint = $customer->source->fingerprint;
                $payment->card_number = $customer->source->last4;
                $payment->receipt_url = $customer->receipt_url;
                $payment->save();
                Mail::to(\App\Models\Setting::select('email')->findOrFail(1)->email)->send(new OrderDonation($order));
            }
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }
    }
}
