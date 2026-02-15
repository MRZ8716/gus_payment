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
        Vite::useCspNonce();
        $nonce = Vite::cspNonce();

        $styleSrc = "";
        $scriptSrc = "";
        $styleNonce = "'nonce-{$nonce}'";
        $scriptNonce = "'nonce-{$nonce}'";

        $route = $request->route();
        $routeName = $route ? $route->getName() : null;

        // exception for routes that need to allow 'unsafe-inline' for styles and scripts in array
        $unsafeInlineRoutes = [];

        if (in_array($routeName, $unsafeInlineRoutes, true)) {
            $styleSrc  = " 'unsafe-inline'";
            $scriptSrc = " 'unsafe-inline'";
        }

        $response = $next($request);

        $errorStatusesAllowUnsafeInline = [400,401,403,404,419,422,429,500,502,503,];

        $status = $response->getStatusCode();

        if (in_array($status, $errorStatusesAllowUnsafeInline, true)) {
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
