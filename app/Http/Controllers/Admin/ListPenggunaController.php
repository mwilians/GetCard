<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

use App\Models\{User, Payment};

use Carbon\Carbon;

class ListPenggunaController extends Controller
{
    public function index() {

        $user = User::where('role', 1)->get();
        
        // dd($user);

        return view('admin.list-pengguna', compact('user'));
    }

    public function data() {
        
        $joinA = User::leftJoin('payment', 'payment.user_id', '=', 'users.id')->where('role', 1)->get();

        $data = Payment::query()
            ->select('payment.user_id', 'users.name', 'users.email')
            ->distinct('payment.user_id')
            ->rightJoin('users', 'users.id', '=', 'payment.user_id')
            ->where('users.role', 1)
            ->orderBy('payment.created_at', 'desc')
            ->get();

            // dd($data);
            
        $user = User::where('role', 1)->get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function PDF() {

        $dataUser = User::where('role', 1)->first();

        $dataUser = User::where('role', 1)->get();

        $date = date('m/d/Y');

        if($dataUser->isEmpty() || $dataUser == null){

            toast('Data User tidak ada!','error');

            return back();

        }

        $pdf = PDF::loadView('admin.listpengguna_pdf', ['dataUser' => $dataUser])->setOptions(['defaultFont' => 'sans-serif']);

    
        return $pdf->download("List Pengguna - $date.pdf");
    }
}