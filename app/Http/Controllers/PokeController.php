<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PokeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Poke/Index');
    }

    public function formatted(): Response
    {
        return Inertia::render('Poke/Formatted');
    }
}
