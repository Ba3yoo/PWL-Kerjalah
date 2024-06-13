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
            ->get();
    
        return Inertia::render('CariLowongan/Cari', ['lowongan' => $lowongan]);
    }
    // public function search($keyword)
    // {
    //     $lowongan = Lowongan::where('jabatan', 'like', '%' . $keyword . '%')
    //                         ->orWhere('deskripsi', 'like', '%' . $keyword . '%')
    //                         ->orWhere('pengalaman_kerja', 'like', '%' . $keyword . '%')
    //                         ->get();
    //     // Anda bisa menyesuaikan respons sesuai dengan kebutuhan, misalnya mengembalikan view atau JSON.
    //     return Inertia::render('CariLowongan/Cari',['lowongan'=>$lowongan]);
    // }
}
