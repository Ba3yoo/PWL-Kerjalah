<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{

    public function login(): Response
    {
//        echo "<script> alert('login'); </script>";
        return Inertia::render('Login/Login');
    }

    public function register(): Response
    {
        return Inertia::render('Login/Register');
    }

    public function biodata(): Response
    {
        $email = session('email');
        $user_id = session('user_id');
        return Inertia::render('Login/Biodata', [
            'email' => $email,
            'user_id' => $user_id
        ]);
    }





}
