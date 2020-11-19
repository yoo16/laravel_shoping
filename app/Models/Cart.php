<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Cart extends Model
{
    use HasFactory;

    public $total_price = 0;

    public function calculate($cart_items)
    {
        if (!$cart_items) return;
        foreach ($cart_items as $cart_item) {
            $this->total_price+= $cart_item['price'];
        }
        return $this->total_price;
    }

}
