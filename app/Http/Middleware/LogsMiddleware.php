<?php

namespace App\Http\Middleware;

use App\Jobs\LogsGob;
use Closure;
use Illuminate\Http\Request;

class LogsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        $ip = $request->ip();
        $user->logs()->create(['ip' => $ip]);

        return $next($request);
    }
}
