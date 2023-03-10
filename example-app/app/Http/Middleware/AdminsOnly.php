<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminsOnly
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
        if(isset(auth()->user()->username)==false){
            abort(403);
            abort(Response::HTTP_FORBIDDEN);
            return $next($request);
        }
        if( (auth()->user()->username!='sezer')){
            abort(403);
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);

    }
}
