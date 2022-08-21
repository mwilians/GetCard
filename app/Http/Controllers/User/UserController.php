<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{Pengguna};
use Redirect;

class UserController extends Controller
{
    public function home() {

        $kartuSaya = Pengguna::where('user_id', Auth::user()->id)->get();

        return view ('user.index', compact('kartuSaya'));

    }
}
