<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo "<pre>";
        //print_r($request->age);
        //echo "</pre>";
        if ($request->age<18) {
            //die("You can not visit this site");
            return response()->view('middleware.stop');

        }
        //print_r($request);
        //echo "<h1>From AgeCheck middleware</h1>"."<br/>";
        return $next($request);
    }
}
