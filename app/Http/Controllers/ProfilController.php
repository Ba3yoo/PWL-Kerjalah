<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $user_id = session('user_id');
        $email = session('email');
        $biodata = Biodata::where('user_id', $user_id)->first();
        return Inertia::render('Profil/Index', ['biodata' => $biodata, 'email' => $email]);
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
            'user_id' => 'nullable',
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
}
