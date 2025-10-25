<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $type)
    {
        $user = $request->user();
        if (!$user) {
            return redirect()->return('login');
        }
        if ($user->type != $type) {
            abort(403);
        }

        $response = $next($request);
        $content = strtoupper($response->content());

        return $next($request);
    }
}
