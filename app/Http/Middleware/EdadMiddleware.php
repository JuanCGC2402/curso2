<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class EdadMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        // $valores = explode('-',$request->user()->created_at);
        
        // $edad = Carbon::createFromDate($valores[0],$valores[1],$valores[2])->diff(\Carbon::now())->format('%y');
        // if ($edad<18) {
        //     abort(403,"No tienes permiso para acceder",null,"error");
        // } else {
        //     # code...
        // }
        
    }
}
