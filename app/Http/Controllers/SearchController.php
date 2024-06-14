<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Lowongan;

use App\Models\Perusahaan;
class SearchController extends Controller
{

    public function index(): Response
    {
        $lowongan = Lowongan::leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
        ->get();        
        return Inertia::render('CariLowongan/Cari',['lowongan'=>$lowongan]);
        // return Inertia::render('CariLowongan/Cari');

    }

    public function search($keyword)
    {
        $lowongan = Lowongan::leftJoin('perusahaan', 'lowongan.id_perusahaan', '=', 'perusahaan.id_perusahaan')
            ->where('lowongan.jabatan', 'like', '%' . $keyword . '%')
            ->orWhere('lowongan.deskripsi', 'like', '%' . $keyword . '%')
            ->orWhere('lowongan.pengalaman_kerja', 'like', '%' . $keyword . '%')
            ->orWhere('perusahaan.nama_perusahaan', 'like', '%' . $keyword . '%')
            ->get();
    
        return Inertia::render('CariLowongan/Cari', ['lowongan' => $lowongan]);
    }

}
