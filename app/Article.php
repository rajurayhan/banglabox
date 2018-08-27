<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use SoftDeletes;
    use Sluggable;
    //
    protected $dates = ['deleted_at'];
    public $fillable = ['title'];

    protected $casts = [
        'tags' 		=> 'array',
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
