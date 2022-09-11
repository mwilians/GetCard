<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{Pengguna, Lembaga};
use Redirect;

class UserController extends Controller
{
    public function home() {

        $kartuSaya = Pengguna::where('user_id', Auth::user()->id)->get();

        $l = Lembaga::where('user_id', Auth::user()->id)->first();

        return view ('user.index', compact('kartuSaya', 'l'));

    }
}
