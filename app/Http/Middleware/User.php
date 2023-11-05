<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // return $next($request);

        if (Auth::check()) {

            if (auth()->user()->role->role_id == 4) {
                return $next($request);
            } else if (auth()->user()->role->role_id == 1) {
                return redirect(url("admin"))->with("error", "You are not authorize to access this page");
            } else {
                return redirect(url('home'));
            }
        }
        return route('login');
        // return redirect()->back()->with("error", "You are not authorize to access this page");
    }
}
