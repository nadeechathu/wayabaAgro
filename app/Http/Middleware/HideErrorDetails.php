<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;

class HideErrorDetails
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response->isServerError()) {
            // Render the custom error view
            $content = View::make('frontend.errors.custom')->render();

            // Replace the response content with the custom error view
            $response->setContent($content);

            // Set the response status code to 500 (Internal Server Error)
            $response->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return $response;
    }
}
