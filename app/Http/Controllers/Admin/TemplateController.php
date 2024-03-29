<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function template() {

        $template = Template::paginate(20);

        return view('admin.template', compact('template'));
    }

    public function storeTemplate(Request $request) {
        
        $request->validate([

            // 'image|mimes:jpeg,png,jpg|min:88',

            'file_demo' => 'image|mimes:jpeg,png,jpg|required',

            'file_kartu_app' => 'image|mimes:jpeg,png,jpg|required',

            'file_kartu_nama1' => 'image|mimes:jpeg,png,jpg|required',

            'file_kartu_nama2' => 'image|mimes:jpeg,png,jpg|required',

            'tipe' => 'required',
            
        ], [

            'file_demo.required' => 'File Demo tidak boleh kosong',

            'file_kartu_app.required' => 'File App tidak boleh kosong',

            'file_kartu_nama1.required' => 'File Kartu Depan tidak boleh kosong',

            'file_kartu_nama2.required' => 'File Kartu Belakang tidak boleh kosong',

            'tipe.required' => 'Tipe tidak boleh kosong',
        ]);

        $file_demo = $request->file('file_demo');
        $lokasiFileDemo = 'assets/media/desain/Demo/';
        $FileDemoName = date('YmdHis') . "." . $file_demo->extension();
        $file_demo->move(public_path($lokasiFileDemo), $FileDemoName);

        $file_kartu_app = $request->file('file_kartu_app');
        $lokasiFileApp = 'assets/media/desain/App/';
        $FileAppName = date('YmdHis') . "." . $file_kartu_app->extension();
        $file_kartu_app->move(public_path($lokasiFileApp), $FileAppName);

        $file_kartu_nama1 = $request->file('file_kartu_nama1');
        $lokasiFileKartuNama1 = 'assets/media/desain/Kartu-Nama/1/';
        $FileKartuNama1Name = date('YmdHis') . "." . $file_kartu_nama1->extension();
        $file_kartu_nama1->move(public_path($lokasiFileKartuNama1), $FileKartuNama1Name);

        $file_kartu_nama2 = $request->file('file_kartu_nama2');
        $lokasiFileKartuNama2 = 'assets/media/desain/Kartu-Nama/2/';
        $FileKartuNama2Name = date('YmdHis') . "." . $file_kartu_nama2->extension();
        $file_kartu_nama2->move(public_path($lokasiFileKartuNama2), $FileKartuNama2Name);

        Template::create([

            'file_demo' => $lokasiFileDemo.$FileDemoName,

            'file_kartu_app' => $lokasiFileApp.$FileAppName,

            'file_kartu_nama1' => $lokasiFileKartuNama1.$FileKartuNama1Name,

            'file_kartu_nama2' => $lokasiFileKartuNama2.$FileKartuNama2Name,

            'tipe' => $request->tipe,
        ]);

        toast('Template Berhasil di Tambah!','success');

        return redirect()->back();
    }

    public function deleteTemplate($id) {
        
        Template::where('id', $id)->delete();

        // DB::table('pengguna')->where('template_id', $id)->delete();

        toast('Desain Kartu Berhasil di Hapus!', 'success');

        return redirect()->back();
    }
}
