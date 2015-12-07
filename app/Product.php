<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $hidden = ['category_id', 'created_at', 'updated_at', 'pivot'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function stations()
    {
        return $this->belongsToMany('App\Station');
    }
}
