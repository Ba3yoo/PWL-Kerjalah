<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Lowongan;

class ApplyController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Lamaran/Lamar');
    }
    public function apply($idLowongan)
{
    $lowongan = Lowongan::leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
        ->where('lowongan.id_lowongan', '=', $idLowongan)
        ->first();

    return Inertia::render('Lamaran/Lamar', ['lowongan' => $lowongan]);
}

}
