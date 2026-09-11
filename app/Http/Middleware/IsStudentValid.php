<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsStudentValid
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if( $request->age <=20 ) {
            return response()->json([
                'error' => 'You must be age grater than 20'
            ]);
        }
        
        return $next($request);
    }
}
