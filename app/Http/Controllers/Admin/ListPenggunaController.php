<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class ListPenggunaController extends Controller
{
    public function index() {

        $user = User::where('role', 1)->get();
        
        // dd($user);

        return view('admin.list-pengguna', compact('user'));
    }

    public function data() {

        $user = User::where('role', 1)->get();

        // dd($user);

        return response()->json([
            'data' => $user
        ]);
    }
}