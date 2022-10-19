<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{Pengguna, ListKartu};

class ListKartuController extends Controller
{
    public function list_kartu(Request $request) {

        $search = $request->search;

        $cariKartu = $request->cariKartu;

        $data = Pengguna::where('no_id', $search)->first();

        if($cariKartu) {

            $simpanKartu = DB::table('list_kartu')->join('pengguna', 'pengguna.id', '=', 'list_kartu.pengguna_id')

            ->where('list_kartu.user_id', Auth::user()->id)

            ->where('pengguna.nama', 'like', '%'. $cariKartu.'%')

            ->orWhere('pengguna.no_id', 'like', '%'. $cariKartu.'%')

            ->paginate(9);
        }

        else{

            $simpanKartu = ListKartu::where('user_id', Auth::user()->id)->paginate(9);
        }

        // $print_r($data);exit;

        return view('user.list-kartu', compact('search', 'data', 'simpanKartu', 'cariKartu'));
    }

    public function simpan_kartu(Request $request) {

        // dd($request->all());

        $list = ListKartu::where('pengguna_id',$request->simpan_kartu)->where('user_id', Auth::user()->id)->first();

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

    public function deleteKartu($id) {

        ListKartu::where('id', $id)->delete();

        toast('Kartu Berhasil di Hapus','success');

        return redirect()->back();
    }
}
