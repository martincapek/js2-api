<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'category_id', 'picture'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function newQuery()
    {
        return parent::newQuery()->where('user', request()->route()->parameter('user'));
    }
}
