<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware
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
        $user = Auth::user();
        if(!$user)
     {
         return redirect('/login');
    }
        if(!$request->user()->isAdmin())
            {
//die("This is not admin");
                return redirect()->back();
            }

        return $next($request);
    }
}
