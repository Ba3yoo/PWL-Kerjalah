<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class BiodataController extends Controller
{
    //
    public function store(Request $request)
    {

        $data = $request->validate([
            'nama_lengkap' => 'required',
            'user_id' => 'nullable',
            'email' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ]);

        $newBiodata = Biodata::create($data);

        return redirect(route('home.index'));
    }


}
