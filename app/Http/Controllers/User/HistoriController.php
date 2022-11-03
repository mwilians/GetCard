<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use App\Models\Payment;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    public function histori() {

        $userBerlangganan = Payment::where('user_id', Auth::user()->id)->get();
        // dd($userBerlangganan);
        
        return view ('user.histori', compact('userBerlangganan'));
    }

    public function dataHistori() {

        $join = Payment::with('package')->where('user_id', Auth::user()->id)->get();

        return response()->json([
            'data' => $join
        ]);
    }
}
