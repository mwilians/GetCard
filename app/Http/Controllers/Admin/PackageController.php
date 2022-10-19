<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function package() {

        $package = Package::all();

        return view('admin.package', compact('package'));
    }

    public function storePackage(Request $request) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|required',
            'paket' => 'required',
            'harga' => 'required',
            'benefit' => 'required',
        ], [
            'foto.required' => 'Foto tidak boleh kosong',
            'paket.required' => 'Nama Paket tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'benefit.required' => 'Benefit tidak boleh kosong',
        ]);

        $foto = $request->file('foto');
        $lokasiFoto = 'assets/media/paket/';
        $FotoName = date('YmdHis') . "." . $foto->getClientOriginalExtension();
        $foto->move(public_path($lokasiFoto), $FotoName);

        $package = Package::create([
            'foto' => $lokasiFoto.$FotoName,
            'paket' => $request->paket,
            'harga' => $request->harga,
            'benefit' => $request->benefit,
        ]);

        toast('Paket Berhasil di Tambah!','success');

        return redirect()->route('package');
    }

    public function updatePackage(Request $request, $id) {

        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg',
            'paket' => 'required',
            'harga' => 'required',
            'benefit' => 'required',
        ], [
            'paket.required' => 'Nama Paket tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'benefit.required' => 'Benefit tidak boleh kosong',
        ]);

        $package = Package::where('id', $id)->first();
        // dd($package);

        $package->update([
            'paket' => $request->paket,
            'harga' => $request->harga,
            'benefit' => $request->benefit,
        ]);

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/paket/';
            $FotoName = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $FotoName);
            
            $package->update([
                'foto' => "$FotoName",
            ]);
        } 

        toast('Paket Berhasil di Update!','success');

        return redirect()->route('package');
    }
    
    public function deletePackage($id) {

        Package::where('id', $id)->delete();

        toast('Paket Berhasil di Hapus!', 'success');

        return redirect()->back();
    }
}
