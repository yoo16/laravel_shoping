<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    static $table_name = 'items';
    protected $table = 'items';
    protected $primaryKey = 'id';

    protected $fillable = [
        'item_category_id',
        'name',
        'price',
        'sort_order',
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

}