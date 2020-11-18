<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    static $table_name = 'user_items';
    protected $table = 'user_items';
    protected $primaryKey = 'id';

    protected $fillable = [
        'amount',
        'code',
        'is_include_tax',
        'is_opened',
        'item_id',
        'price',
        'sort_order',
        'tax',
        'total_price',
        'user_card_id',
        'user_id',
    ];

    protected $guarded = [
        'created_at',
        'id',
        'updated_at',
    ];

    protected $dates = [
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

    public function getList()
    {
        //TODO Relation
        $items = [
            [ 'id' => 1, 'item_id' => 2, 'name' => 'お茶 525mlPET×24', 'price' => 1980, ],
            [ 'id' => 2, 'item_id' => 4 , 'name' => 'グリーンカレー x 5', 'price' => 1800, ],
        ];
        return $items;
    }

}