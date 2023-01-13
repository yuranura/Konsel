<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        //1. mengambil token dari header
        //2. Mengambil password dari database
        //3. Mengambil password dengan token(Jika sama diteruskan), jika salah ditolak
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
