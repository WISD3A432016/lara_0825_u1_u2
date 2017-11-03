<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Exercise1-2：設定 Model
    protected $table = 'posts';

    //Exercise2-3 : 設定 Post.php的 fillable屬性
    protected $fillable=[
        'title',
        'content',
        'is_feature'
    ];
}
