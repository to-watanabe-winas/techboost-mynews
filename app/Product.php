<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
* 商品
*/
class Product extends Model
{
    public function reviews()
    {
        return $this->hasMany('App\Review', 'product_id');
    }
}
