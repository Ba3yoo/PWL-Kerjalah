<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Lowongan;
use App\Models\User;
use App\Models\Apply;

class ApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('login.mid');
    }
    public function index(): Response
    {
        return Inertia::render('Lamaran/Lamar');
    }
    public function apply($idLowongan)
    {
        $lowongan = Lowongan::leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
            ->where('lowongan.id_lowongan', '=', $idLowongan)
            ->first();

        $user_id = session('user_id');

        return Inertia::render('Lamaran/Lamar', ['lowongan' => $lowongan, 'user_id' => $user_id]);
    }

    public function storeAppli(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'id_lowongan' => 'required',
            'teks_lamaran' => 'required',
            'cv_link' => 'required',
        ]);

        $user_id = session('user_id');
        $newApplication = Apply::create($data);

        return redirect(route('cari.index'));
    }
}
