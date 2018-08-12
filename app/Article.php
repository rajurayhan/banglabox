<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;
    //
    protected $dates = ['deleted_at'];
}
