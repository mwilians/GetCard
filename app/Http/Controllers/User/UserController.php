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

        $kartuSaya = Pengguna::where('user_id', Auth::user()->id)->limit(3)->get();

        $listKartu = ListKartu::where('user_id', Auth::user()->id)->get();

        $l = Lembaga::where('user_id', Auth::user()->id)->first();        

        return view ('user.index', compact('kartuSaya', 'listKartu', 'l'));
    }

    public static function cekPremium() {

        if(!Auth::check()){
            return false;
        }

        $paid = Payment::where('user_id', Auth::user()->id)->where(function($query){
            $query->where('status','settlement')->orWhere('status','capture');
        })->orderBy('id', 'desc')->first();

        if(!$paid){
            return false;
        } elseif(now() > $paid->created_at->addDays($paid->package->masa_berlaku)){
            return false;
        }

        return true;
    }
}
