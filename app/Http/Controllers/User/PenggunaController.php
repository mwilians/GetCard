<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Alert;

class PenggunaController extends Controller
{
    public function index() {

        $pengguna = Pengguna::all();

        return view('user.pengguna', compact('pengguna'));
    }

    public function data() {

        $pengguna = Pengguna::all();

        return response()->json([
            'data' => $pengguna
        ]);
    }

    public function tambah() {

        $pengguna = Pengguna::all();

        return view('user.pengguna-add', compact('pengguna'));
    }

    public function insert(Request $request) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);

            $pengguna = Pengguna::create([
                'foto' => "$Foto",
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
            ]);
            
        } else {

            // $pengguna = Pengguna::create($request->all());

            DB::table('pengguna')->insert([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
            ]);

        }

        // toast('Data berhasil di Tambah','success');

        return redirect()->route('index')->with('succes',' Data Berhasil di Tambah');
    }

    public function edit($id) {

        $pengguna = Pengguna::find($id);

        //dd($pengguna);

        return view('user.pengguna-edit', compact('pengguna'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $pengguna = Pengguna::find($id);

        $pengguna->update($request->all());

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);

            $pengguna->update();
        } 
        
        return redirect()->route('index')->with('success',' Data Berhasil di Update');
    }

    public function delete(Request $request, $id) {

        $pengguna = Pengguna::find($id);

        $pengguna->delete();
        
        return redirect()->route('index')->with('success',' Data Berhasil di Hapus');
    }

    public function show() {

        return view('user.pengguna-show');
    }
}
