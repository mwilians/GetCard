<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\Pengguna;

class ListKartuController extends Controller
{
    public function list_kartu(Request $request) {

        // $search = Pengguna::where('no_id', $request->search)->first();

        $search = $request->search;

        $data = Pengguna::where('no_id', 'LIKE', '%'.$search.'%')->first();

        // $template = Pengguna::where('id', $id)->first();

        return view('user.list-kartu', compact('search', 'data'));
    }

    public function search($no_id) {

        $pengguna = Pengguna::where('id', $no_id)->first();

        // tampilan kartu

        $template = Template::where('id', $pengguna->template_id)->first();

        $lembaga = Lembaga::where('id', $pengguna->id)->first();


        header("Content-type: image/png");
        // Lokasi file yang ingin di edit
        $image_depan = imagecreatefrompng(public_path($template->file_kartu_nama1));
        $image_width = imagesx($image_depan);
        $image_height = imagesy($image_depan);

        $image_belakang = imagecreatefrompng(public_path($template->file_kartu_nama2));
        $image_width = imagesx($image_belakang);
        $image_height = imagesy($image_belakang);

        // tempel foto user
        $user_img = imagecreatefromjpeg(public_path($pengguna->foto));
        $user_img_width = imagesx($user_img);
        $user_img_height = imagesy($user_img);

        $user_img_width = 575;
        $user_img_height = 575;

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

        imagecopy($image, $user_img_color, 449, 416, 0, 0, $user_img_new_width, $user_img_new_height);

        // warna
        $black = imagecolorallocate($image, 0,0,0);
        $white = imagecolorallocate($image, 255,255,255);

        // lokasi font
        $roboto = public_path('font/Roboto-Regular.ttf');
        $abrilFatface = public_path('font/AbrilFatface-Regular.otf');
        $josefinSans = public_path('font/JosefinSans-Light.ttf');
        $openSans = public_path('font/OpenSans-Regular.ttf');

        // Ambil data nama dari query parameter
        $username = $pengguna->nama ?? "Nama";

        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox(150, 0, $roboto, $username);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2);
        imagettftext($image, 150, 0, $x, 1317, $black, $abrilFatface, $username);


        // Ambil data jabatan dari query parameter
        $jabatan = $pengguna->jabatan ?? "Jabatan";

        $fontSize = 80;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $roboto, $jabatan);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + 20;
        imagettftext($image, $fontSize, 0, $x, 1505, $white, $openSans, $jabatan);


        // Ambil data telp dari query parameter
        $phone = $pengguna->telepon ?? "+62 xxx-xxxx-xxx";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $roboto, $phone);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + 20;
        imagettftext($image, $fontSize, 0, $x, 1863, $black, $openSans, $phone);


        // Ambil data email dari query parameter
        $email = $pengguna->email ?? "email@gmail.com";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $roboto, $email);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + 20;
        imagettftext($image, $fontSize, 0, $x, 1983, $black, $openSans, $email);


        // Ambil data bergabung dari query parameter
        $bergabung = $pengguna->tanggal_bergabung ?? "1 Jan 2022 / 1 Feb 2022";

        $fontSize = 65;
        // untuk menghitung berapa panjang dari text
        $bbox = imagettfbbox($fontSize, 0, $roboto, $bergabung);
        // untuk menentukan titik tengah dari text
        $x = $bbox[0] + (imagesx($image) / 2) - ($bbox[4] / 2) + 20;
        imagettftext($image, $fontSize, 0, $x, 2100, $black, $openSans, $bergabung);


        imagepng($image);
        imagedestroy($image);
        imagedestroy($qr_image);
        imagedestroy($logo_image);
        imagedestroy($user_img_color);
        imagedestroy($mask);

        return view('user.list-kartu', compact('pengguna', 'template', 'lembaga'));
    }
}
