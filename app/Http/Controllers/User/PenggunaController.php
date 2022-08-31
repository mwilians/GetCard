<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\{DB, Auth};

use App\Models\{Pengguna, Lembaga, Template, User};

use BaconQrCode\Encoder\QrCode;

use App\Imports\{DataImport, CobaImport};

use Maatwebsite\Excel\Facades\Excel;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

use Alert;

class PenggunaController extends Controller
{
    // Datatable //
    
    public function index() {

        $pengguna = Pengguna::where('user_id', Auth::user()->id)->get();

        return view('user.pengguna', compact('pengguna'));
    }

    public function data() {

        $pengguna = Pengguna::where('user_id', Auth::user()->id)->get();

        return response()->json([
            'data' => $pengguna
        ]);
    }

    public function generateUniqueCode()
    {
        do {
            $no_id = random_int(100000, 999999);
        } while (Pengguna::where("no_id", "=", $no_id)->first());
  
        return $no_id;
    }

    public function tambah() {

        $pengguna = Pengguna::all();

        return view('user.pengguna-add', compact('pengguna'));
    }

    public function insert(Request $request) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $no = $this->generateUniqueCode();
        // dd($no);

        if ($foto = $request->file('foto')) {
            $lokasiFoto = 'assets/media/pengguna/';
            $Foto = $lokasiFoto . date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($lokasiFoto, $Foto);

            $pengguna = Pengguna::create([
                'user_id' => Auth::user()->id,
                'no_id' => $no,
                'foto' => "$Foto",
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);

            // dd($pengguna);
            
        } else {

            // $pengguna = Pengguna::create($request->all());

            DB::table('pengguna')->insert([
                'user_id' => Auth::user()->id,
                'no_id' => $no,
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
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
            
            $pengguna->update([
                'foto' => "$Foto",
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jabatan' => $request->jabatan,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'tanggal_bergabung' => $request->tanggal_bergabung,
                'tanggal_berakhir' => $request->tanggal_berakhir,
            ]);
        } 
        return redirect()->route('index')->with('success',' Data Berhasil di Update');
    }

    public function delete(Request $request) {

        $pengguna = Pengguna::where('id', $request->id)->delete();

        return response()->json($pengguna);
        
        return redirect()->route('index')->with('success',' Data Berhasil di Hapus');
    }


    // Import Data //

    public function import(Request $request) {

        if($request->file('file')){

            $file = $request->file('file');
            
            $import = new CobaImport;

            Excel::import($import,$file);

            // dd($import);
            toast('success','success');
            return redirect()->route('index')->with('success', 'Data Berhasil di Import');

        }else{
            
            toast('gagal','error');
            return back()->with('warning','Data Gagal di Import');
        }

    }


    // Tampilan Preview //

    public function show($id) {

        $pengguna = Pengguna::where('id', $id)->get();

        $lembaga = Lembaga::where('user_id', Auth::user()->id)->get();
        
        $template = Template::all();

        $default = Template::first();

        $previewDesain = Pengguna::where('id', $id)->first();

        // dd($previewDesain->template->file_kartu_app);

        // dd($previewDesain);

        return view('user.pengguna-show', compact('id', 'pengguna', 'lembaga', 'template', 'default', 'previewDesain'));
    }


    // Pilih Template //

    public function template($id)
    {
        $template = Template::where('id', $id)->get();

        return response()->json([
            'data' => $template
        ]);
    }


    // Fungsi Cetak Kartu Nama //

    public function print($id) {

        $pengguna = Pengguna::where('id', $id)->get();

        $lembaga = Lembaga::where('user_id', Auth::user()->id)->get();

        $desainKartu = Pengguna::where('id', $id)->first();

        return view('user.pengguna-print', compact('pengguna', 'lembaga', 'desainKartu'));
    }


    // Simpan Template //

    public function simpan(Request $request, $id) {

        // $request->template;

        $pengguna = Pengguna::find($id);

        // $template = $user->template_id;

        // $user->template_id = $request->template;

        $pengguna->template_id = $request->template;

        $pengguna->save();

        return redirect('user/pengguna/'.$id.'/show')->with(compact('pengguna'), ['succes',' Template Berhasil di Simpan']);
    }
}
