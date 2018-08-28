<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * --------------------------------------------------------------------------
     * The attributes that are mass assignable.
     * --------------------------------------------------------------------------
     * @var array
     * --------------------------------------------------------------------------
     */
    protected $fillable = [
        'restaurant_id',
        'product_name',
        'product_description',
        'category_id',
        'product_price',
        'promotional_price',
        'product_photo'
    ];

    /**
     * --------------------------------------------------------------------------
     * Table
     * --------------------------------------------------------------------------
     */
    protected $table = 'menus';
}
