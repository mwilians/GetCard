<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\{DB, Auth};

use App\Models\{Pengguna, Lembaga, Template, User, Payment};

use SimpleSoftwareIO\QrCode\Facades\QrCode;

use App\Imports\{DataImport, CobaImport};

use Maatwebsite\Excel\Facades\Excel;

use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

use Carbon\Carbon;

use Validator;

use Alert;

class PenggunaController extends Controller {

    // Datatable //
    
    public function index() {

        $pengguna = Pengguna::where('user_id', Auth::user()->id)->get();

        $payment = Payment::where('user_id', Auth::user()->id)->where(function($query){
            $query->where('status','settlement')->orWhere('status','capture');
        })->orderBy('id', 'asc')->first();
        
        if($payment) {
            $masa_berlaku = $payment->package->masa_berlaku;

            if($payment->created_at->addDays($masa_berlaku) < now()){
                $limit = 3;
            }else{
                $limit = 999999;
                // $limit = $payment->package->limit_kartu;
            }

        } else {
            $limit = 3;
        }   

        $hari = "0000-00-39 00:00:00";

        $carbon = Carbon::now();

        // dd($carbon, $carbon->addDays(1));

        return view('user.pengguna', compact('pengguna', 'payment', 'limit'));
    }

    public function data() {

        $pengguna = Pengguna::where('user_id', Auth::user()->id)->get();
        $lembaga = Lembaga::where('user_id', Auth::user()->id)->first();

        return response()->json([
            'data' => $pengguna,
            'dataLembaga' => $lembaga
        ]);
    }

    // public static function numLimit() {

    //     $payment = Payment::where('user_id', Auth::user()->id)->first();

    //     if($payment) {
    //         return $payment->package->limit_kartu;
    //     } else {
    //         return 5;
    //     }

    //     return view('user.pengguna', compact('payment'));
    // }

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
            'nama' => 'required|min:3|max:15|regex:/^[a-zA-Z]+(([\',. -][a-zA-Z ])?[a-zA-Z]*)*$/',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|max:15',
            'email' => 'required',
            'tanggal_bergabung' => 'required',
            'tanggal_berakhir' => 'required',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal 3 karakter',
            'nama.max' => 'Nama maximal 15 karakter',
            'nama.regex' => 'Nama tidak boleh angka',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'telepon.required' => 'Telepon tidak boleh kosong',
            'telepon.max' => 'Telepon maximal 14 angka',
            'email.required' => 'Email tidak boleh kosong',
            'tanggal_bergabung.required' => 'Tanggal Bergabung tidak boleh kosong',
            'tanggal_berakhir.required' => 'Tanggal Berakhir tidak boleh kosong',
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

        toast('Data Berhasil di Tambah!', 'success');

        // alert()->success('Success','Data berhasil di Tambah!'); 

        return redirect()->route('index')->with('succes',' Data Berhasil di Tambah');
    }

    public function edit($id) {

        $pengguna = Pengguna::find($id);

        //dd($pengguna);

        return view('user.pengguna-edit', compact('pengguna'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required|min:3|max:15',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'telepon' => 'required|max:15',
            'email' => 'required',
            'tanggal_bergabung' => 'required',
            'tanggal_berakhir' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal 3 karakter',
            'nama.max' => 'Nama maximal 15 karakter',
            'nama.regex' => 'Nama tidak boleh angka',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'telepon.required' => 'Telepon tidak boleh kosong',
            'telepon.max' => 'Telepon maximal 14 angka',
            'email.required' => 'Email tidak boleh kosong',
            'tanggal_bergabung.required' => 'Tanggal Bergabung tidak boleh kosong',
            'tanggal_berakhir.required' => 'Tanggal Berakhir tidak boleh kosong',
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

        toast('Data Berhasil di Update!', 'success');

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
            
            toast('Data Berhasil di Import','success');

            return redirect()->route('index')->with('success', 'Data Berhasil di Import');

        }else{
            
            toast('Data Gagal di Import','error');

            return back()->with('warning','Data Gagal di Import');
        }

    }


    // Tampilan Preview //

    public function show($id) {

        $pengguna = Pengguna::where('id', $id)->get();

        $no_id = Pengguna::where('no_id', $id)->first();

        $lembaga = Lembaga::where('user_id', Auth::user()->id)->get();
        
        $template = Template::paginate(18);

        $previewDesain = Pengguna::where('id', $id)->first();
        
        $le = Lembaga::where('user_id', Auth::user()->id)->first();

        if ($le == null) {

            toast('Isi Data Perusahaan untuk dapat mengakses Detail!', 'warning');

            return redirect()->route('lembaga');
        }

        return view('user.pengguna-show', compact('id', 'pengguna', 'no_id', 'lembaga', 'template', 'previewDesain'));
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

        toast('Template Berhasil di Simpan!','success');

        return redirect('user/pengguna/'.$id.'/show')->with(compact('pengguna'), ['success',' Template Berhasil di Simpan']);
    }

    public function simpanTemplate($id_user, $id_template){

        $pengguna = Pengguna::where('id', $id_user)->first();
        
        $pengguna->update(['template_id' => $id_template]);

        return response()->json([
            'success'
        ]);
    }


    // Salin Link //

    public function viewLink($id, $no_id) {

        $pengguna = Pengguna::where('id', $id)->first();

        $template = Template::where('id', $pengguna->template_id)->first();

        $lembaga = Lembaga::where('user_id', $pengguna->user_id)->first();

        header("Content-type: image/png");
        // Lokasi file yang ingin di edit

        if ($pengguna->template_id == null) {
            $image = imagecreatefrompng(public_path('assets/media/desain/DAPP/A2C.png'));
            $image_width = imagesx($image);
            $image_height = imagesy($image);
        } else {
            $image = imagecreatefrompng(public_path($template->file_kartu_app));
            $image_width = imagesx($image);
            $image_height = imagesy($image);
        }
        

        // tempel qr code ke template id card
        $qr_image = QrCode::format('png')->size(100)->generate(url('/getcard.kartusaya/'.$pengguna->id.'/'.$pengguna->no_id));
        $q = imagecreatefromstring($qr_image);
        imagecopyresized($image, $q, 450, 3610, 0, 0, 679, 679, 100, 100);

        // tempel watermark
        if(!\App\Http\Controllers\User\UserController::cekPremium ()) {
            $watermark = imagecreatefrompng(public_path('assets/media/logos/GC-6.png'));
            $watermark_width = imagesx($watermark);
            $watermark_height = imagesy($watermark);
            imagecopyresized($image, $watermark, ($image_width / 2)-($watermark_width / 2) + 3010, 80, 0, 0, 480, 150, $watermark_width, $watermark_height);
        }

        // tempel logo perusahaan ke template id card
        $logo_image = imagecreatefrompng(public_path($lembaga->foto));
        $logo_image_width = imagesx($logo_image);
        $logo_image_height = imagesy($logo_image);
        // imagecopyresized($image, $logo_image, ($image_width / 2)-($logo_image_width / 2), 2380, 0, 0, $logo_image_width, $logo_image_height, $logo_image_width, $logo_image_height);
        imagecopyresized($image, $logo_image, ($image_width / 2)-($logo_image_width / 2), ($image_height / 2)-($logo_image_height / 2) + 200, 0, 0, $logo_image_width, $logo_image_height, $logo_image_width, $logo_image_height);

        $explode = last(explode('.', $pengguna->foto));

        // tempel foto user
        if ($explode =='jpg') {
            $user_img = imagecreatefromjpeg(public_path($pengguna->foto));
        } elseif ($explode =='png') {
            $user_img = imagecreatefrompng(public_path($pengguna->foto));
        } else {
            $user_img = imagecreatefromjpeg(public_path($pengguna->foto));
        }

        // $user_img = imagecreatefromjpeg(public_path($pengguna->foto));
        $user_img_width = imagesx($user_img);
        $user_img_height = imagesy($user_img);

        $user_img_new_width = 675;
        $user_img_new_height = 675;

        $user_img_color = imagecreatetruecolor($user_img_new_width, $user_img_new_height);
        imagealphablending($user_img_color, true);
        imagecopyresampled($user_img_color, $user_img, 0, 0, 0, 0, $user_img_new_width, $user_img_new_height, $user_img_width, $user_img_height);

        $mask = imagecreatetruecolor($user_img_new_width, $user_img_new_height);

        $transparent = imagecolorallocate($mask, 255, 0, 0);
        imagecolortransparent($mask, $transparent);

        imagefilledellipse($mask, $user_img_new_width/2, $user_img_new_height/2, $user_img_new_width, $user_img_new_height, $transparent);

        $red = imagecolorallocate($mask, 0, 0, 0);
        imagecopymerge($user_img_color, $mask, 0, 0, 0, 0, $user_img_new_width, $user_img_new_height, 100);
        imagecolortransparent($user_img_color, $red);
        imagefill($user_img_color, 0, 0, $red);

        imagecopy($image, $user_img_color, 456, 405, 0, 0, $user_img_new_width, $user_img_new_height);

        // warna
        $black = imagecolorallocate($image, 0,0,0);
        $white = imagecolorallocate($image, 255,255,255);
        $green = imagecolorallocate($image, 65,98,79);

        // lokasi font
        $roboto = public_path('font/Roboto-Regular.ttf');
        $abrilFatface = public_path('font/AbrilFatface-Regular.otf');
        $josefinSans = public_path('font/JosefinSans-Light.ttf');
        $openSans = public_path('font/OpenSans-Regular.ttf');
        $poppins = public_path('font/Poppins-Regular.ttf');

        // Ambil data nama dari query parameter
        $username = $pengguna->nama ?? "Nama";

        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox(120, 0, $abrilFatface, $username);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, 120, 0, $x, 1317, $black, $abrilFatface, $username);


        // Ambil data jabatan dari query parameter
        $jabatan = $pengguna->jabatan ?? "Jabatan";

        $fontSize = 90;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $jabatan);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 1505, $white, $poppins, $jabatan);


        // Ambil data telp dari query parameter
        $phone = $pengguna->telepon ?? "+62 xxx-xxxx-xxx";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $phone);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 1780, $black, $poppins, $phone);


        // Ambil data email dari query parameter
        $email = $pengguna->email ?? "email@gmail.com";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $email);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 1890, $black, $poppins, $email);


        // Ambil data bergabung dari query parameter
        $bergabung = $pengguna->tanggal_bergabung .'/'. $pengguna->tanggal_berakhir ?? "1 Jan 2022 / 1 Feb 2022";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $bergabung);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 2015, $black, $poppins, $bergabung);


        // Ambil data telp dari query parameter
        $telp_office = $lembaga->telepon ?? "+62 xxx-xxxx-xxx";

        $fontSize = 60;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $telp_office);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 2935, $black, $poppins, $telp_office);


        // Ambil data alamat dari query parameter
        $tmpAddres = [];
        $address = $lembaga->alamat ?? "Alamat";
        $pjgAlamat = strlen($address);
        $jmlRow = ceil($pjgAlamat / 34);
        for($i = 0; $i < $jmlRow; $i++){
            $baris = substr($address, $i * 34, 34);
            array_push($tmpAddres, $baris);
        }

        // $address = explode(",", $address);

        $fontSize = 60;
        // untuk menghitung berapa panjang dari text
        $i = 1;
        foreach($tmpAddres as $a){
            $bbox = imagettfbbox($fontSize, 0, $poppins, $a);
            // untuk menentukan titik tengah dari text
            $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
            imagettftext($image, $fontSize, 0, $x, 2955 + ($i * 100), $black, $poppins, $a);
            $i++;
        }

        // Ambil data email dari query parameter
        $email_office = $lembaga->email ?? "email@gmail.com";

        $fontSize = 60;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $email_office);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 2970 + ($i * 100), $black, $poppins, $email_office);


        // Ambil data url dari query parameter
        $url_office = $lembaga->website ?? "www.website.com";

        $fontSize = 60;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $url_office);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 3080 + ($i * 100), $black, $poppins, $url_office);


        imagepng($image);
        imagedestroy($image);
        imagedestroy($qr_image);
        imagedestroy($watermark);
        imagedestroy($logo_image);
        imagedestroy($user_img_color);
        imagedestroy($mask);
 
        return redirect('user/pengguna/'.$id.'/show')->with('success',' Link Berhasil di Salin!');
    }


    // Preview //

    public function viewPreviewD($id) {

        $pengguna = Pengguna::where('id', $id)->first();

        $template = Template::where('id', $pengguna->template_id)->first();

        $lembaga = Lembaga::where('user_id', $pengguna->user_id)->first();

        header("Content-type: image/png");
        // Lokasi file yang ingin di edit

        if ($pengguna->template_id == null) {
            $image = imagecreatefrompng(public_path('assets/media/desain/DKARTU/K2C.png'));
            $image_width = imagesx($image);
            $image_height = imagesy($image);
        } else {
            $image = imagecreatefrompng(public_path($template->file_kartu_nama1));
            $image_width = imagesx($image);
            $image_height = imagesy($image);
        }
        

        // tempel qr code ke template id card
        $qr_image = QrCode::format('png')->size(88)->generate(url('/getcard.kartusaya/'.$pengguna->id.'/'.$pengguna->no_id));
        $q = imagecreatefromstring($qr_image);
        imagecopyresized($image, $q, 1715, 1280, 0, 0, 600, 600, 88, 88);

        $explode = last(explode('.', $pengguna->foto));

        // tempel watermark
        if(!\App\Http\Controllers\User\UserController::cekPremium ()) {
            $watermark = imagecreatefrompng(public_path('assets/media/logos/GC-6.png'));
            $watermark_width = imagesx($watermark);
            $watermark_height = imagesy($watermark);
            imagecopyresized($image, $watermark, ($image_width / 2)-($watermark_width / 2) + 1655, 40, 0, 0, 480, 150, $watermark_width, $watermark_height);
        }

        // tempel foto user
        if ($explode =='jpg') {
            $user_img = imagecreatefromjpeg(public_path($pengguna->foto));
        } elseif ($explode =='png') {
            $user_img = imagecreatefrompng(public_path($pengguna->foto));
        } else {
            $user_img = imagecreatefromjpeg(public_path($pengguna->foto));
        }

        $user_img_width = imagesx($user_img);
        $user_img_height = imagesy($user_img);

        $user_img_new_width = 675;
        $user_img_new_height = 675;

        $user_img_color = imagecreatetruecolor($user_img_new_width, $user_img_new_height);
        imagealphablending($user_img_color, true);
        imagecopyresampled($user_img_color, $user_img, 0, 0, 0, 0, $user_img_new_width, $user_img_new_height, $user_img_width, $user_img_height);

        $mask = imagecreatetruecolor($user_img_new_width, $user_img_new_height);

        $transparent = imagecolorallocate($mask, 255, 0, 0);
        imagecolortransparent($mask, $transparent);

        imagefilledellipse($mask, $user_img_new_width/2, $user_img_new_height/2, $user_img_new_width, $user_img_new_height, $transparent);

        $red = imagecolorallocate($mask, 0, 0, 0);
        imagecopymerge($user_img_color, $mask, 0, 0, 0, 0, $user_img_new_width, $user_img_new_height, 100);
        imagecolortransparent($user_img_color, $red);
        imagefill($user_img_color, 0, 0, $red);

        imagecopy($image, $user_img_color, 1680, 100, 0, 0, $user_img_new_width, $user_img_new_height);

        // warna
        $black = imagecolorallocate($image, 0,0,0);
        $white = imagecolorallocate($image, 255,255,255);
        $green = imagecolorallocate($image, 65,98,79);

        // lokasi font
        $roboto = public_path('font/Roboto-Regular.ttf');
        $abrilFatface = public_path('font/AbrilFatface-Regular.otf');
        $josefinSans = public_path('font/JosefinSans-Light.ttf');
        $openSans = public_path('font/OpenSans-Regular.ttf');
        $poppins = public_path('font/Poppins-Regular.ttf');

        // Ambil data nama dari query parameter
        $username = $pengguna->nama ?? "Nama";

        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox(120, 0, $abrilFatface, $username);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + 400;
        imagettftext($image, 120, 0, $x, 1010, $black, $abrilFatface, $username);


        // Ambil data jabatan dari query parameter
        $jabatan = $pengguna->jabatan ?? "Jabatan";

        $fontSize = 90;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $jabatan);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + 400;
        imagettftext($image, $fontSize, 0, $x, 1185, $white, $poppins, $jabatan);


        // Ambil data telp dari query parameter
        $phone = $pengguna->telepon ?? "+62 xxx-xxxx-xxx";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $phone);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, 170, 1573, $black, $poppins, $phone);


        // Ambil data email dari query parameter
        $email = $pengguna->email ?? "email@gmail.com";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $email);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, 170, 1683, $black, $poppins, $email);


        // Ambil data bergabung dari query parameter
        $bergabung = $pengguna->tanggal_bergabung .'/'. $pengguna->tanggal_berakhir ?? "1 Jan 2022 / 1 Feb 2022";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $bergabung);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, 170, 1793, $black, $poppins, $bergabung);


        imagepng($image);
        imagedestroy($image);
        imagedestroy($qr_image);
        imagedestroy($logo_image);
        imagedestroy($watermark);
        imagedestroy($user_img_color);
        imagedestroy($mask);
 
        return redirect('user/pengguna/'.$id.'/show')->with('succes',' Link Berhasil di Salin!');
    }

    public function viewPreviewB($id) {

        $pengguna = Pengguna::where('id', $id)->first();

        $template = Template::where('id', $pengguna->template_id)->first();

        $lembaga = Lembaga::where('user_id', $pengguna->user_id)->first();

        header("Content-type: image/png");
        // Lokasi file yang ingin di edit

        if ($pengguna->template_id == null) {
            $image = imagecreatefrompng(public_path('assets/media/desain/DKARTU/K2D.png'));
            $image_width = imagesx($image);
            $image_height = imagesy($image);
        } else {
            $image = imagecreatefrompng(public_path($template->file_kartu_nama2));
            $image_width = imagesx($image);
            $image_height = imagesy($image);
        }

        // tempel logo perusahaan ke template id card
        $explode = last(explode('.', $lembaga->foto));

        if ($explode =='jpg') {
            $logo_image = imagecreatefromjpeg(public_path($lembaga->foto));
        } elseif ($explode =='png') {
            $logo_image = imagecreatefrompng(public_path($lembaga->foto));
        } else {
            $logo_image = imagecreatefromjpeg(public_path($lembaga->foto));
        }

        $logo_image_width = imagesx($logo_image);
        $logo_image_height = imagesy($logo_image);
        // imagecopyresized($image, $logo_image, ($image_width / 2)-($logo_image_width / 4), 580, 0, 0, $logo_image_width, $logo_image_height, $logo_image_width, $logo_image_height);
        imagecopyresized($image, $logo_image, ($image_width / 2)-($logo_image_width / 2), ($image_height / 2)-($logo_image_height / 2) - 280, 0, 0, $logo_image_width, $logo_image_height, $logo_image_width, $logo_image_height);

        // tempel watermark
        if(!\App\Http\Controllers\User\UserController::cekPremium ()) {
            $watermark = imagecreatefrompng(public_path('assets/media/logos/GC-6.png'));
            $watermark_width = imagesx($watermark);
            $watermark_height = imagesy($watermark);
            imagecopyresized($image, $watermark, ($image_width / 2)-($watermark_width / 2) + 1655, 40, 0, 0, 480, 150, $watermark_width, $watermark_height);
        }

        // warna
        $black = imagecolorallocate($image, 0,0,0);
        $white = imagecolorallocate($image, 255,255,255);
        $green = imagecolorallocate($image, 65,98,79);

        // lokasi font
        $roboto = public_path('font/Roboto-Regular.ttf');
        $abrilFatface = public_path('font/AbrilFatface-Regular.otf');
        $josefinSans = public_path('font/JosefinSans-Light.ttf');
        $openSans = public_path('font/OpenSans-Regular.ttf');
        $poppins = public_path('font/Poppins-Regular.ttf');

        // Ambil data telp dari query parameter
        $telp_office = $lembaga->telepon ?? "+62 xxx-xxxx-xxx";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $telp_office);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 1190, $black, $poppins, $telp_office);


        // Ambil data alamat dari query parameter
        $tmpAddres = [];
        $address = $lembaga->alamat ?? "Alamat";
        $pjgAlamat = strlen($address);
        $jmlRow = ceil($pjgAlamat / 58);
        for($i = 0; $i < $jmlRow; $i++){
            $baris = substr($address, $i * 58, 58);
            array_push($tmpAddres, $baris);
        }

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $i = 1;
        foreach($tmpAddres as $a){
            $bbox = imagettfbbox($fontSize, 0, $poppins, $a);
            // untuk menentukan titik tengah dari text
            $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
            imagettftext($image, $fontSize, 0, $x, 1210 + ($i * 110), $black, $poppins, $a);
            $i++;
        }


        // Ambil data email dari query parameter
        $email_office = $lembaga->email ?? "email@gmail.com";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $email_office);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 1220 + ($i * 110), $black, $poppins, $email_office);


        // Ambil data url dari query parameter
        $url_office = $lembaga->website ?? "www.website.com";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $poppins, $url_office);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, $fontSize, 0, $x, 1335 + ($i * 110), $black, $poppins, $url_office);


        imagepng($image);
        imagedestroy($image);
        imagedestroy($qr_image);
        imagedestroy($logo_image);
        imagedestroy($watermark);
        imagedestroy($user_img_color);
        imagedestroy($mask);
 
        return redirect('user/pengguna/'.$id.'/show')->with('succes',' Link Berhasil di Salin!');
    }
}
