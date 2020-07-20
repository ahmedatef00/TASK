<?php

namespace App\Http\Middleware;

use App\Page;
use Closure;

class CheckPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        
        $page = Page::where('feature', $request->feature)->first();
        if ($page->show == 0) {
            return redirect(route('home'));
        }
        return $next($request);
    }
}
