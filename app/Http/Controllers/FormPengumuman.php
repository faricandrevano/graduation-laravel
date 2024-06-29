<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Alert;
use Carbon\Carbon;

class FormPengumuman extends Controller
{
    public function index () {
        // dd(date('Y-m-d H:i:s') >= '2024-05-06 00:00:00');
        if (date('Y-m-d H:i:s') >= '2024-05-04 00:00:00') {
            Session::forget('search_results');
            return view('siswa.input');
        } else {
            return view('siswa.countdown');
        }
    }
    public function hasil_proses (Request $request) {
        $data = Siswa::where('nisn',$request->nisnSiswa)->where('nis',$request->nisSiswa)->get();
        $enkripsiUrl = Crypt::encryptString($request->nisnSiswa);
        if (Siswa::where('nisn',$request->nisnSiswa)->where('nis',$request->nisSiswa)->exists() == false) {
            Alert::warning('Pesan', 'Data Siswa Tidak Ditemukan!');
            return redirect()->back();
        } else {
            Session::put('search_results', $data);
            return redirect()->route('hasil', ['q' => $enkripsiUrl]);
        }
    }
    public function hasil() {
        $data = Session::get('search_results');
        return view('siswa.hasil',compact('data'));
    }
}
