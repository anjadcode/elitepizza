<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceHttpsForAssets
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
        // Force HTTPS for build assets
        if (!$request->secure() && strpos($request->getRequestUri(), '/build/') === 0) {
            return redirect()->secure($request->getRequestUri());
        }
        
        return $next($request);
    }
}
