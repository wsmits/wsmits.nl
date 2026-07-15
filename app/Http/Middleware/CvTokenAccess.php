<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CvTokenAccess
{
    public function handle(Request $request, Closure $next)
    {
        $token = config('app.cv_token');

        if ($request->query('token') === $token) {
            session(['cv_access' => true]);
            return redirect()->route('about-me');
        }

        if (session('cv_access') === true) {
            return $next($request);
        }

        abort(403);
    }
}
