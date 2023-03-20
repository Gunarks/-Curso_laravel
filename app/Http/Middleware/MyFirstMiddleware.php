<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class MyFirstMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    private $users;
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($this->users->count() <= 9) :

            return $response;
        else :
            dd("Não passaou pelo middleware");

        endif;
    }
}
