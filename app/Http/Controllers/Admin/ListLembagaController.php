<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

use App\Models\Lembaga;

class ListLembagaController extends Controller
{
    public function perusahaan() {

        $lembaga = Lembaga::all();

        return view('admin.list-lembaga', compact('lembaga'));
    }

    public function data() {

        $lembaga = Lembaga::all();

        return response()->json([
            'data' => $lembaga
        ]);
    }

    public function PDF() {

        $dataLembaga = Lembaga::all();

        $date = date('m/d/Y');

        if($dataLembaga->isEmpty() || $dataLembaga == null){

            toast('Data Perusahaan tidak ada!','error');

            return back();

        }

        $pdf = PDF::loadView('admin.listlembaga_pdf', ['dataLembaga' => $dataLembaga])->setOptions(['defaultFont' => 'sans-serif']);

    
        return $pdf->download("List Perusahaan - $date.pdf");
    }
}
