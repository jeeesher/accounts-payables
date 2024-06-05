<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StorePreviousUrl
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->route()->named('folders.payable')) {
            Session::put('previous_url', url()->previous());
        }

        return $next($request);
    }
}
