<?php

namespace EKejaksaan\Lapdu\Http\Middleware;

use Closure;
use EKejaksaan\Core\Models\User;
use Illuminate\Support\Facades\Auth;

class LapduMiddleware
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
        if ($user = $request->user()) {
            if (!$user->institute) {
                return redirect()->route('lapdu.home');
            } else {
                if (in_array($user->nrp, ['67212', '6866018']))
                return redirect()->route('lapdu.home');
            }
        } else {
            return redirect()->route('lapdu.home');
            // return redirect('/login');
        }

        return $next($request);
    }
}
