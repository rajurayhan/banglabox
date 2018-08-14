<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
    protected $dates = ['deleted_at'];

    protected $casts = [
        'tags' 		=> 'array'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
