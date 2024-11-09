<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;  // Import the Auth facade
use App\Models\User;

class ShouldAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and if the email matches the admin email
        if (Auth::check() && Auth::user()->email === 'isbdigitalinovation@gmail.com') {
           // dd(Auth::check(), Auth::user());
            return $next($request);
        } else {
            // If not, return a 404 or redirect as needed
            abort(404); // You can customize this behavior as per your requirement
        }
    }
}
