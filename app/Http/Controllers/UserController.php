<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller {
    public function index(String $user) {
        return Inertia::render('User/Index', [
            'user' => $user
        ]);
    }

    public function indexGet(Request $request) {
        $user = $request['name']??'Default';
        return Inertia::render('User/Index', [
            'user' => $user
        ]);
    }

    public function store(Request $request) {

        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $newUser = User::create($data);

//        return redirect(route('home.index'));
//        return Inertia::render('Login/Biodata', [
//            'email' => $data['email'],
//            'user_id' => $newUser->id
//        ]);
        return redirect(route('home.biodata'))->with(['email' => $newUser->email, 'user_id' => $newUser->id]);
    }

    public function auth(Request $request) {

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $userData = User::where('email', $request->email)->first();
        $emailNotFound = true;

        if (!$userData) {

//            echo "<script>alert('Email tidak ditemukan');</script>";
            return Inertia::render('Login/Login', [
                'emailNotFound' => $emailNotFound
            ]);



        } elseif (!Hash::check($request->password, $userData->password)) {
//            return response()->json(['message' => 'Incorrect password'], 401);
            $emailNotFound = false;



        } else {
            Session::put('email', $request->email);
            Session::put('user_id', $userData->user_id);

            return redirect(route('home.index'));

        }

//        return Inertia::render('Login/Login');
        return Inertia::render('Login/Login', [
            'email' => $userData->email,
            'emailNotFound' => $emailNotFound
        ]);
//        return response()->noContent();

    }

    public function  logout(Request $request) {
        Session::flush();
        return redirect(route('home.index'));
    }

}

