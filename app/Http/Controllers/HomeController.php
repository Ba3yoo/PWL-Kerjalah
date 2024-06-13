<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home/Index');
    }

    public function login(): Response
    {
        return Inertia::render('Login/Login');
    }

    public function artikel(): Response
    {
        return Inertia::render('Artikel/Index');
    }


}
