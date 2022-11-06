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
        $dataBerlangganan = Payment::where('status','settlement')->orWhere('status','capture')->get();
        $dataPendapatan = Payment::where('status','settlement')->orWhere('status','capture')->sum('gross_amount');

        // Pendaftaran User ------------------------------------------------------ //

        $newUser = User::where('role', 1)->select(DB::raw("COUNT(*) as newUser"), DB::raw("Month(created_at) as month")) 
        ->whereYear('created_at', date('Y'))
        ->orderBy('month','asc')
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('newUser');

        $bulan = User::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');

        $newUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($dataUser as $u) {
            $user = $newUser[Carbon::parse($u->created_at)->month-1];
            $newUser[Carbon::parse($u->created_at)->month-1]=$user+1;
        }

        // User Berlangganan ------------------------------------------------------ //

        $userPremium = Payment::where('status','settlement')->orWhere('status','capture')->select(DB::raw("COUNT(*) as userPremium"), DB::raw("Month(created_at) as month"))
        ->whereYear('created_at', date('Y'))
        ->orderBy('month','asc')
        ->groupBy(DB::raw("Month(created_at)"))
        ->pluck('userPremium');

        $bulanPremium = Payment::select(DB::raw("MONTHNAME(created_at) as bulanPremium"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulanPremium');

        $userPremium = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        foreach ($dataBerlangganan as $b) {
            $premium = $userPremium[Carbon::parse($b->created_at)->month-1];
            $userPremium[Carbon::parse($b->created_at)->month-1]=$premium+1;
        }
        
        // Rincian Pendapatan ------------------------------------------------------ //

        // $totalPendapatan = Payment::where('status','settlement')->orWhere('status','capture')->sum('gross_amount')
        // ->select(DB::raw("Month(created_at) as month"))
        // ->whereYear('created_at', date('Y'))
        // ->orderBy('month','asc')
        // ->groupBy(DB::raw("Month(created_at)"))
        // ->pluck('totalPendapatan');

        $total = Payment::where('status','settlement')->orWhere('status','capture')
        ->whereYear('created_at', date('Y'))
        ->get();

        $bulanPendapatan = Payment::select(DB::raw("MONTHNAME(created_at) as bulanPendapatan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulanPendapatan');

        $totalPendapatan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        // foreach ($dataPendapatan as $p) {
        //     $pendapatan = $totalPendapatan[Carbon::parse($p->created_at)->month-1];
        //     $totalPendapatan[Carbon::parse($p->created_at)->month-1]=$pendapatan+$p->gross_amount;
        // }

        foreach ($total as $t) {
            $pendapatan = $totalPendapatan[Carbon::parse($t->created_at)->month-1];
            $totalPendapatan[Carbon::parse($t->created_at)->month-1]=$pendapatan+$t->gross_amount;
        }

        // ------------------------------------------------------ //

        return view ('admin.index', compact('dataUser', 'dataLembaga', 'dataTemplate', 'dataBerlangganan', 'dataPendapatan',
        'newUser', 'bulan', 
        'userPremium', 'bulanPremium',
        'total', 'totalPendapatan', 'bulanPendapatan'));
    }

    public function filter(Request $request) {

        $year = $request->get('year');

        $daftarUser = User::where('role', 1)
        ->whereYear('created_at', '=', $year)->get();

        $daftarPremium = Payment::where('status', 'settlement')->orWhere('status', 'capture')
        ->whereYear('created_at', '=', $year)->get();

        $daftarPendapatan = Payment::where('status', 'settlement')->orWhere('status', 'capture')->sum('gross_amount')
        ->whereYear('created_at', '=', $year)->get();

        dd($daftarPremium);

        return view('admin.index', ['daftarUser' => $daftarUser], ['daftarPremium' => $daftarPremium], ['daftarPendapatan' => $daftarPendapatan]);
    }

    public function ajaxGraphic(Request $request) {

        $daftarUser = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $daftarPremium = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $daftarPendapatan = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        $user = User::where('role', 1)->whereYear('created_at', $request->tahun)->get();
        foreach ($user as $u) {
            $jumlah = $daftarUser[Carbon::parse($u->created_at)->month - 1];
            $daftarUser[Carbon::parse($u->created_at)->month - 1] = $jumlah + 1;
        }

        $premium = Payment::where('status', 'settlement')->orWhere('status', 'capture')->whereYear('created_at', $request->tahun)->get();
        foreach ($premium as $p) {
            $jumlah = $daftarPremium[Carbon::parse($p->created_at)->month - 1];
            $daftarPremium[Carbon::parse($p->created_at)->month - 1] = $jumlah + 1;
        }

        $pendapatan = Payment::where('status', 'settlement')->orWhere('status', 'capture')->whereYear('created_at', $request->tahun)->get();
        foreach ($pendapatan as $pd) {
            $jumlah = $daftarPendapatan[Carbon::parse($pd->created_at)->month - 1];
            $daftarPendapatan[Carbon::parse($pd->created_at)->month - 1] = $jumlah + $pd -> gross_amount;
        }

        $data = [
            "user" => $daftarUser,
            "premium" => $daftarPremium,
            "pendapatan" => $daftarPendapatan,
        ];

        return $data;
    }
}
