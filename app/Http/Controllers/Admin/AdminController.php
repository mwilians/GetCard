<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{Auth, DB};
use Illuminate\Http\Request;
use App\Models\{User, Lembaga, Template, Pengguna, Payment};
use Carbon\Carbon;
use Redirect;

class AdminController extends Controller
{
    public function home() {

        $dataUser = User::where('role', 1)->get();
        
        $dataLembaga = Lembaga::all();

        $dataTemplate = Template::all();

        $dataBerlangganan = Payment::all();


        $newUser = User::where('role', 1)->select(DB::raw("COUNT(*) as newUser"), DB::raw("Month(created_at) as month"))
        
        ->whereYear('created_at', date('Y'))

        ->orderBy('month','asc')

        ->groupBy(DB::raw("Month(created_at)"))

        ->pluck('newUser');

        // dd($newUser);

        $bulan = User::select(DB::raw("MONTHNAME(created_at) as bulan"))

        ->GroupBy(DB::raw("MONTHNAME(created_at)"))

        ->pluck('bulan');


        $newUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($dataUser as $u) {

            $user = $newUser[Carbon::parse($u->created_at)->month-1];

            $newUser[Carbon::parse($u->created_at)->month-1]=$user+1;
        }

        

        $userBerlanggan = Payment::all();

        $bulanBerlangganan = Payment::select(DB::raw("MONTHNAME(created_at) as bulanBerlangganan"))

        ->GroupBy(DB::raw("MONTHNAME(created_at)"))

        ->pluck('bulanBerlangganan');

        $userBerlangganan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($userBerlanggan as $uB) {

            $berlangganan = $userBerlangganan[Carbon::parse($uB->created_at)->month-1];

            $userBerlangganan[Carbon::parse($uB->created_at)->month-1]=$berlangganan+1;
        }

        return view ('admin.index', compact('dataUser', 'dataLembaga', 'dataTemplate', 'newUser', 'bulan', 'userBerlangganan', 'bulanBerlangganan', 'dataBerlangganan'));
    }
}
