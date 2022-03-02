<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function getRouteKeyName() 
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany('App\Model\Post');
    }
}
