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

        return view ('user.histori', compact('userBerlangganan'));
    }

    public function dataHistori() {

        $userBerlangganan = Payment::where('user_id', 2)->get();

        return response()->json([
            'dataHistori' => $userBerlangganan
        ]);
    }
}
