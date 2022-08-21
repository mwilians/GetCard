<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{User, Lembaga, Template, Pengguna};
use Redirect;

class AdminController extends Controller
{
    public function home() {

        $dataUser = User::where('role', 1)->get();
        
        $dataLembaga = Lembaga::all();

        $dataTemplate = Template::all();

        return view ('admin.index', compact('dataUser', 'dataLembaga', 'dataTemplate'));
    }
}
