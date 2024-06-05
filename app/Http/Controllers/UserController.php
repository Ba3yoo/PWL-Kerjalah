<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
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
}

