<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LibraryController;
use Carbon\Carbon;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class FrontendMiddleware
{
    protected $route;


    public function __construct(Route $route)
    {
        $this->route = $route;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        Log::debug($request);
        Log::debug($next);
        exit;
    }
}
