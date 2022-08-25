<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\Pengguna;

class ListKartuController extends Controller
{
    public function list_kartu(Request $request) {

        $search = Pengguna::where('no_id', $request->search)->first();

        return view('user.list-kartu', compact('search'));
    }
}
