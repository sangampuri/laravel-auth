<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , String $role): Response
    {
        echo '<h2 style="color: red;">Hi from ValidUser middleware.</h2>';
        echo "<h3>$role</h3>";


        if ( Auth::user()->role === $role) {
            return $next($request);
        } elseif(Auth::user()->role == 'reader') {
            return redirect()->route('reader');
        } 
        
        else {
            return redirect('/login');
        }

    }
}
