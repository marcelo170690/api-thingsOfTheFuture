<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Este middleware permite el acceso a las rutas de esta api
     * Pero dara permiso solo a las urls que nosotros lo permitamos
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            //Url a la que se le dará acceso en las peticiones
            ->header("Access-Control-Allow-Origin", "*")
            //->header("Access-Control-Allow-Origin", "http://localhost:8081")
            //Métodos que a los que se da acceso
            ->header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS")
            //Headers de la petición
            ->header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization");
    }
}
