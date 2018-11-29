<?php

namespace App\Http\Middleware;

use Closure;

class Siswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()->level == 'Siswa') {
          return $next($request);
        }

          return redirect('home');
    }
}
