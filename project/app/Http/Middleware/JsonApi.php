<?php

namespace App\Http\Middleware;

use Closure;

class JsonApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $main_key)
    {
        $data = $request->get($main_key);
        if (is_array($data)) {
            return $next($request);
        }
        $decoded_data = json_decode($data, true);

        if ($decoded_data) {
            $request[$main_key] = $decoded_data;
        } else {
            $response['code'] = 400;
            $response['message'] = 'Bad request. Invalid JSON.';
            return response()->json($response, 400);
        }

        return $next($request);
    }
}
