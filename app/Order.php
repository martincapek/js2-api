<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status'];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function newQuery()
    {
        return parent::newQuery()->where('user', request()->route()->parameter('user'));
    }
}
