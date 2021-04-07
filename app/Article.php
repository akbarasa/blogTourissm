<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'user_id', 'description', 'category_id', 'image',
    ];

    protected $table = 'articles';

    public function Category(){
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

    public function User(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
