<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Factory;

class SessionCart
{
    public function __construct(Factory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
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
        $cart_items = Session::get('cart_items');
        //if ($cart_items) $request->merge(['cart_items' => $cart_items]);
        $this->viewFactory->share('cart_items', $cart_items);
        return $next($request);
    }
}
