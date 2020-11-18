<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Cart extends Model
{
    use HasFactory;

    public $total_price = 0;

    public function calculate(Item $item)
    {
        $items = $item->getList();
        if (!$items) return;
        foreach ($items as $item) {
            $this->total_price = $item['price'];
        }
    }

}
