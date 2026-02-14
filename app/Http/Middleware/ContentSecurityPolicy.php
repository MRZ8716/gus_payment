<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        Vite::useCspNonce();
        $nonce = Vite::cspNonce();

        $styleSrc = "";
        $scriptSrc = "";
        $styleNonce = "nonce-" . $nonce;
        $scriptNonce = "nonce-" . $nonce;

        $route = $request->route();
        $routeName = $route ? $route->getName() : null;

        $unsafeInlineRoutes = [
            'welcome',
            'landing',
            'home',
        ];

        if (in_array($routeName, $unsafeInlineRoutes, true)) {
            $styleSrc  = " 'unsafe-inline'";
            $scriptSrc = " 'unsafe-inline'";
        }

        $csp = "
            default-src 'self';
            script-src 'self' " . $scriptSrc . " " . $scriptNonce . ";
            style-src 'self' " . $styleSrc . " " . $styleNonce . ";
            img-src 'self' data:;
            font-src 'self';
            frame-src 'none';
            object-src 'none';
            base-uri 'self';
            form-action 'self';
        ";

        $response->headers->set(
            'Content-Security-Policy',
            preg_replace('/\s+/', ' ', trim($csp))
        );

        return $response;
    }
}
