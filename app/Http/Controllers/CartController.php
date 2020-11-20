<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public $cart_items;

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $cart_items = view()->shared('cart_items');

        $cart = new Cart();
        $total_price = $cart->calculate($cart_items);
        $data = [
            'total_price' => $total_price
        ];
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

        return redirect()->route('item');
    }

    public function remove(Request $request)
    {
        $item = new Item();
        $item->fetch($request->id);

        //TODO
        $cart_items = view()->shared('cart_items');
        unset($cart_items[$request->id]);
        session(['cart_items' => $cart_items]);
        $cart_items = Session::get('cart_items');

        return redirect()->route('cart');
    }

    public function confirm(Request $request)
    {
        //購入一覧
        //TODO
        $cart_items = view()->shared('cart_items');
        $cart = new Cart();
        $total_price = $cart->calculate($cart_items);
        $data = [
            'cart_items' => $cart_items,
            'total_price' => $total_price
        ];

        //クレジットカード情報取得（外部）

        return view('cart.confirm', $data);
    }

    public function purchase(Request $request)
    {
        //購入処理
        //決済処理
        //失敗の場合、確認に戻る
        //メール送信

        return redirect()->route('cart.complete');
    }

    public function complete(Request $request)
    {
        //セッションクリア
        Session::forget('cart_items');
        return view('cart.complete');
    }



}
