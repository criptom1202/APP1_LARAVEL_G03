<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidarDatos
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
        if($request->val == "Admin"){
            return $next($request);
        }else{
            return redirect()->route('t2');
        }
        //
       
    }
}
