<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{DB, Auth};
use Illuminate\Http\Request;
use App\Models\{Payment, Package, User};

class PaymentController extends Controller
{
    public function premium(Request $request) {

        $package = Package::all();

        $user = User::where('id', Auth::user()->id)->get();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-a0phStBuoGYNqA13haftkXDt';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'item_details' => array(
                [
                    'id' => 'a01',
                    'price' => 10000,
                    'quantity' => 1,
                    'name' => 'Premium'
                ],
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'last_name' => '',
                'email' => Auth::user()->email,
                'phone' => '08111222333',
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('user.premium', compact('package', 'user', 'snapToken'));
    }

    public function premium_post(Request $request) {

        $json = json_decode($request->get('json'));
        // dd($json);

        $order = new Payment(); 
        $order->user_id = Auth::user()->id;
        $order->status = $json->transaction_status;
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        return $order->save() ? redirect(url('/'))->with('alert-success', 'Berhasil Berlangganan') : redirect(url('/'))->with('alert-failed', 'Terjadi Kesalahan');
    }

    public function payment() {

        return view('user.pembayaran');
    }
}
