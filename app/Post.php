<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    protected $guarded = ['id'];

    
    
    
    public function user()
    {
        return $this->belongsTo(User::class);
    } 

}
