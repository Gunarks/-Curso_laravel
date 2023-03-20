<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class PostsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    private $posts;
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if ($this->posts->count() <= 9) :

            return $response;
        else :
            dd("Não passaou pelo middleware");

        endif;
    }
}
