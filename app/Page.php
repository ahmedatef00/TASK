<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    
    protected $guarded = ['id'];

    public function getTitleAttribute($value)
    {
        return ucwords($value);
    } 
}
