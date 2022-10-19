<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{Pengguna, ListKartu, Template, Lembaga, Payment};
use Redirect;

class UserController extends Controller
{
    public function home() {

        $kartuSaya = Pengguna::where('user_id', Auth::user()->id)->get();

        $listKartu = ListKartu::where('user_id', Auth::user()->id)->get();

        $l = Lembaga::where('user_id', Auth::user()->id)->first();        

        return view ('user.index', compact('kartuSaya', 'listKartu', 'l'));

    }

    public static function cekPremium() {

        if(!Auth::check()){
            return false;
        }

        $paid = Payment::where('user_id', Auth::user()->id)->first();

        if(!$paid){
            return false;
        }

        return true;
    }
}
