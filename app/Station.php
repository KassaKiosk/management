<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'pivot', 'type_id'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
