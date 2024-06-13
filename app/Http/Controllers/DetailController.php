<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Lowongan;

class DetailController extends Controller
{

    public function index(): Response
    {
        return Inertia::render('DetailLowongan/Detail');
    }

    public function detail($idLowongan)
{
    $lowongan = Lowongan::leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
        ->where('lowongan.id_lowongan', '=', $idLowongan)
        ->first();

    return Inertia::render('DetailLowongan/Detail', ['lowongan' => $lowongan]);
}

}
