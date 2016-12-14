<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product_model extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'p_name', 'p_price', 'p_description','p_img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
