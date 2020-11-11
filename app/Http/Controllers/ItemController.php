<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ItemController extends Controller
{
    public function index()
    {
        $item = new Item();
        $items = $item->getList();

        $data = compact('items');
        return view('item.index', $data);
    }
    
    public function show(Request $request)
    {
        $item = new Item();
        $item->fetch($request->id);
        $data = compact('item', $item);
        return view('item.show', $data);
    }

}
