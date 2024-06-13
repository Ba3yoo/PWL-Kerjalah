<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        '/register/new',
        '/login/auth',
        '/biodata/new',
        '/biodata',
        '/profil/biodata/update',
        '/profil/store-pekerjaan',
        '/profil/riwayat-pendidikan/new',
    ];

}
