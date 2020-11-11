<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart_items = Session::get('cart_items');
        $data = ['cart_items' => $cart_items];
        return view('cart.index', $data);
    }
    
    public function show(Request $request)
    {
        $item = new Item();
        $item->fetch($request->id);
        $data = compact('item', $item);
        return view('item.show', $data);
    }

    public function clear()
    {
        Session::forget('cart_items');
        return redirect()->route('cart');
    }

    public function add(Request $request)
    {
        $item = new Item();
        $item->fetch($request->id);

        Session::push('cart_items', $item->value);

        return redirect()->route('item.show', ['id' => $request->id]);
    }

    public function remove(Request $request)
    {
        $item = new Item();
        $item->fetch($request->id);

        $cart_items = Session::get('cart_items');
        unset($cart_items[$request->id]);
        session(['cart_items' => $cart_items]);
        $cart_items = Session::get('cart_items');

        return redirect()->route('cart');
    }

}
