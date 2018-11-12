<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Closure;


class Cors {
    

     public function handle($request, Closure $next) {
        /* @var $response Response */
        $addOrigin = true;

	//header("Access-Control-Allow-Origin: *");

       if (!$addOrigin) {
            return $next($request);
        }

        $response = $next($request);
        $environment = env('APP_ENV', 'prod');

        $response->header('Access-Control-Allow-Origin', '*');

        if (!$request->isMethod('OPTIONS')) {
            return $response;
        }
        $allow = $response->headers->get('Allow'); // true list of allowed methods
        if (!$allow) {
            return $response;
        }
        $headers = [
            'Access-Control-Allow-Methods' => $allow,
            'Access-Control-Max-Age' => 3600,
            'Access-Control-Allow-Headers' => 'X-Requested-With, Origin, X-Csrftoken, Content-Type, Accept, X-Api-Key',
        ];
        return $response->withHeaders($headers);
    }

}                                                                                                                         
