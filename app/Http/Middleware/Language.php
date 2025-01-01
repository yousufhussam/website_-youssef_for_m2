<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has('language')) {
            // Get the language from the session
            $language = $request->session()->get('language');

            // Set the language
            app()->setLocale($language);
        }

        return $next($request);
    }
}
