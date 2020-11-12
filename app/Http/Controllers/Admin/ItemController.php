<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $item = new Item();
        $items = $item->getList();

        $data = compact('items');
        return view('admin.item.index', $data);
    }
    
    public function show(Request $request)
    {
        $item = new Item();
        $item->fetch($request->id);
        $data = compact('item', $item);
        return view('admin.item.show', $data);
    }

    public function create()
    {
        return view('admin.item.create');
    }
}
