<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed    
     */
    public function handle(Request $request, Closure $next, ... $roles)
    {
        // if ($$request->user()->role == $role){
        //     return $next($request);
        // }
        // abort(403, 'Anda tidak dapat mengakses laman ini');
        if (!Auth::check()) return redirect('login');

        $user = Auth::user();

        foreach($roles as $role) {
            if($user->hasRole($role)) return $next($request);
        }

        return abort(403, 'Unauthorized action.');
    }
}