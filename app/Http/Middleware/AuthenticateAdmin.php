<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $user->load('roles');
            view()->share(compact('user'));
            if (!app()->runningInConsole() && $user) {
                $roles = Role::with('permissions:id,title')->get();
                $permissionsArray = [];
                foreach ($roles as $role) {
                    foreach ($role->permissions as $permissions) {
                        $permissionsArray[$permissions->title][] = $role->id;
                    }
                }
                foreach ($permissionsArray as $title => $roles) {
                    Gate::define($title, function (\App\Models\User $user) use ($roles) {
                        return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                    });
                }
            }
        }
        $index = explode("/", url()->current());
        if (Auth::check() == true &&  in_array("admin", $index) && Auth::user()->role->role_id == 4) {
            return redirect(url("users"))->with("error", "You are not authorize to access this page");
        }
        return $next($request);
    }
}
