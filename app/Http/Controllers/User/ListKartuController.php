<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{Pengguna,ListKartu};

class ListKartuController extends Controller
{
    public function list_kartu(Request $request) {

        $search = $request->search;

        $data = Pengguna::where('no_id', $search)->first();

        $simpanKartu = ListKartu::where('user_id',Auth::user()->id)->get();

        // $print_r($data);exit;


        return view('user.list-kartu', compact('search', 'data','simpanKartu'));
    }

    public function simpan_kartu(Request $request) {

        // dd($request->all());

        $list = ListKartu::where('pengguna_id',$request->simpan_kartu)->where('user_id',Auth::user()->id)->first();

        if (!$request->simpan_kartu) {

            toast('Tidak ada Kartu yang akan di Simpan!','warning');

            return redirect()->back();

        }

        if($list){

            toast('Kartu Nama telah Anda Tambahkan!','info');

            return redirect()->back();

        }else{

            ListKartu::create([

                'user_id' => Auth::user()->id,

                'pengguna_id' => $request->simpan_kartu,

            ]);

            toast('Kartu Nama Berhasil di Simpan!','success');
            
            return redirect('user/list-kartu');
        }

    }
}
