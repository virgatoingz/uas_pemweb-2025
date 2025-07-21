<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $expectedKey = env('API_KEY');
        $providedKey = $request->header('X-API-KEY');

        if (empty($providedKey)) {
            return response()->json([
                'message' => 'Unauthorized: API Key is missing'
            ], 401);
        }

        if (!hash_equals($expectedKey, $providedKey)) {
            return response()->json([
                'message' => 'Unauthorized: Invalid API Key'
            ], 401);
        }

        return $next($request);
    }
}
