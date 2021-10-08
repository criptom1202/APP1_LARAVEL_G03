<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidarFormulario
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
        if($request->cargo == "Administrador"){
            return redirect()->route('t2');
        }else{
           return $next($request);
        }
        //
    }
}
