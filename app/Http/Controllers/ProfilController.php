<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\RiwayatPekerjaan;
use App\Models\RiwayatPendidikan;
use App\Models\Apply;
use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfilController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('login.mid');
    }
    public function index()
    {
        $user_id = session('user_id');
        $email = session('email');
        $biodata = Biodata::where('user_id', $user_id)->first();
        $riwayatPekerjaan = RiwayatPekerjaan::where('user_id', $user_id)->get();
        $riwayatPendidikan = RiwayatPendidikan::where('user_id', $user_id)->get();
        $lamaran = Apply::leftJoin('lowongan', 'lamaran.id_lowongan', '=', 'lowongan.id_lowongan')
                        ->leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
                        ->where('lamaran.user_id', '=', $user_id)
                        ->get();

        return Inertia::render('Profil/Index', ['biodata' => $biodata, 'email' => $email,
            'riwayatPekerjaan' => $riwayatPekerjaan, 'riwayatPendidikan' => $riwayatPendidikan, 'lamaran' => $lamaran]);
    }

    public function biodata()
    {
        $user_id = session('user_id');
        $email = session('email');
        $biodata = Biodata::where('user_id', $user_id)->first();
        return Inertia::render('Profil/Biodata', ['biodata' => $biodata, 'email' => $email]);
    }

    public function updateBiodata(Request $request)
    {

        $data = $request->validate([
            'nama_lengkap' => 'required',
            'user_id' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);
        $user_id = session('user_id');
        $biodata = Biodata::where('user_id', $user_id)->first();

        $biodata->update($data);

        return redirect(route('profil.index'));
    }
    public function riwayatPekerjaan()
    {
        $user_id = session('user_id');
        $email = session('email');
        $biodata = Biodata::where('user_id', $user_id)->first();
        return Inertia::render('Profil/RiwayatPekerjaan', ['biodata' => $biodata, 'email' => $email]);
    }

    public function storeRiwayatPekerjaan(Request $request)
    {
        $data = $request->validate([
            'nama_perusahaan' => 'required',
            'user_id' => 'required',
            'jabatan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'lokasi_pekerjaan' => 'required',
        ]);

        $user_id = session('user_id');
        $newRiwayatPekerjaan = RiwayatPekerjaan::create($data);

        return redirect(route('profil.index'));

    }

    public function riwayatPendidikan()
    {
        $user_id = session('user_id');
        $email = session('email');
        $biodata = Biodata::where('user_id', $user_id)->first();
        return Inertia::render('Profil/RiwayatPendidikan', ['biodata' => $biodata, 'email' => $email]);
    }

    public function storeRiwayatPendidikan(Request $request)
    {
        $data = $request->validate([
            'nama_instansi' => 'required',
            'user_id' => 'required',
            'tanggal_lulus' => 'required',
            'jenjang_pendidikan' => 'required',
        ]);

        $user_id = session('user_id');
        $newRiwayatPendidikan = RiwayatPendidikan::create($data);

        return redirect(route('profil.index'));

    }
}
