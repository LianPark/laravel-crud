<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale_cookie = $request->cookie('locale');
        if (isset($locale_cookie)) {
            App::setLocale($locale_cookie);
        } else {
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
