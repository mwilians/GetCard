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

        return view('user.premium', compact('package', 'user'));
    }

    public function snap(Request $request) {
        
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
                'gross_amount' => $request->item_price,
            ),
            'item_details' => array(
                [
                    'id' => $request->item_id,
                    'price' => $request->item_price,
                    'quantity' => 1,
                    'name' => $request->item_name,
                ],
            ),
            'customer_details' => array(
                'first_name' => $request->user_name,
                'email' => $request->user_email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return response()->json([
            'snap' => $snapToken,
            'item' => $request->item_id
        ]);

    }

    public function premium_post(Request $request) {

        $json = json_decode($request->get('json'));
        // dd($json);

        $order = new Payment(); 
        $order->user_id = Auth::user()->id;
        $order->package_id = $request->item_ids;
        $order->status = isset($json->transaction_status) ? $json->transaction_status : null;
        $order->transaction_id = isset($json->transaction_id) ? $json->transaction_id : null;
        $order->order_id = isset($json->order_id) ? $json->order_id : null;
        $order->gross_amount = isset($json->gross_amount) ? $json->gross_amount : null;
        $order->payment_type =  isset($json->payment_type) ? $json->payment_type : null;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        return $order->save() ? redirect(url('/'))->with('alert-success', 'Berhasil Berlangganan') : redirect(url('/'))->with('alert-failed', 'Terjadi Kesalahan');
    }

    public function payment() {

        return view('user.pembayaran');
    }
}
