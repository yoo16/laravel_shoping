<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    static $table_name = 'informations';
    protected $table = 'informations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'body',
        'is_opened',
        'posted_at',
        'sort_order',
        'title',
        'url',
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
        $informations = [
            [ 'id' => 1, 'title' => '年末セール＆ポイント還元キャンペーン開催中！', 'body' => 'Black Friday 年末セール＆ポイント還元キャンペーンを開催しています。', 'url' => '', 'posted_at' => '2020/11/01' ],
            [ 'id' => 2, 'title' => 'システム障害のお知らせ', 'body' => 'システム障害が発生しました。', 'url' => '', 'posted_at' => '2020/10/20' ],
            [ 'id' => 3, 'title' => '新規会員登録特典ポイント', 'body' => 'Black Friday をはじめました', 'url' => '', 'posted_at' => '2020/10/11' ],
        ];
        return $informations;
    }
}