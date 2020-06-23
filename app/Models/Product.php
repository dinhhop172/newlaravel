<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'name',
        'desc',
        'image',
        'price',
        'pin',
        'card',
        'cpu',
        'camera',
        'hdh',
        'screen',
        'product_brand_id'
    ];

    // function orderdetail(){
    //     return $this->hasMany('App\Models\orderdetail');
    // }
    // function orderdetail(){
    //     return $this->hasMany('App\Models\OrderDetail','poduct_id', 'id');
    // }
    function orders(){
        return $this->belongsToMany('App\Models\Order', 'order_detail', 'product_id', 'order_id');
    }
    function brands(){
        return $this->belongsTo('App\Models\ProductBrand', 'product_brand_id', 'id');
    }
}
