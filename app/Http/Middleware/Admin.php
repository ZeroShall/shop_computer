<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(Guard $guard) {
        $this->auth = $guard;
    }
    
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->group_id != 1) {
            return redirect('home');
        }
        return $next($request);
    }
}
