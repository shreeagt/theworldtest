<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminAuthentication
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
        if (Auth::check() && Auth::user()->role_id == '1') {
            return $next($request);
        }
        return redirect()->route('admin.login');
    }
    // public function handle($request, Closure $next)
    // {
    //     // if (!Auth::guest()) {
    //     //     $user = Auth::user();
    //     //     app()->setLocale($user->locale ?? app()->getLocale());

    //     //     return $user->hasPermission('browse_admin') ? $next($request) : redirect('/');
    //     // }
    //     if (!Auth::check()) {
        

    //     return redirect()->route('admin.login');
    //     }
    // }

}