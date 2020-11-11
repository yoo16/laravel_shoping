<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    function getList()
    {
        $items = [
            [ 'id' => 1, 'name' => 'Chromebook', 'price' => 29800, ],
            [ 'id' => 2, 'name' => 'お茶 525mlPET×24', 'price' => 1980, ],
            [ 'id' => 3, 'name' => 'イヤホン', 'price' => 9800, ],
            [ 'id' => 4, 'name' => 'グリーンカレー x 5', 'price' => 1800, ],
            [ 'id' => 5, 'name' => 'グリーンカレー x 3', 'price' => 1200, ],
            [ 'id' => 6, 'name' => 'グリーンカレー x 2', 'price' => 500, ],
        ];
        return $items;
    }

    function fetch($id)
    {
        $items = $this->getList();
        foreach ($items as $item) {
            if ($item['id'] == $id) {
                $this->value = $item;
                return;
            }
        }
    }
}
