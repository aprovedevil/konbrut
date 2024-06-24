<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RedirectUsertype
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            $routeName = $request->route()->getName();

            switch ($user->usertype) {
                case "user":
                    if ($routeName == "dashboard") {
                        return $next($request);
                    }
                break;
                case "admin":
                    if ($routeName == "admin.dashboard") {
                        return $next($request);
                    }
                break;
                case "siswa":
                    if ($routeName == "siswa.dashboard") {
                        return $next($request);
                    }
                break;
                case "guru":
                    if ($routeName == "guru.dashboard") {
                        return $next($request);
                    }
            }


            switch ($user->usertype) {
                case "user":
                    return redirect()->route('dashboard');
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'siswa':
                    return redirect()->route('siswa.dashboard');
                case 'guru':
                    return redirect()->route('guru.dashboard');
                default:
                    return redirect('/login')->withErrors(['error' => 'User type not recognized or unauthorized access. ' ]);
            }
        }

        return redirect('/login');
    }
}
