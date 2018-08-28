<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * --------------------------------------------------------------------------
     * The attributes that are mass assignable.
     * --------------------------------------------------------------------------
     * @var array
     * --------------------------------------------------------------------------
     */
    protected $fillable = [
        'restaurant_name',
        'cnpj',
        'restaurant_phone',
        'address',
        'neighborhood',
        'city',
        'state',
        'cep',
        'profile_picture',
        'owner_name',
        'cpf',
        'owner_email',
        'owner_phone',
        'email',
        'password'
    ];

    /**
     * --------------------------------------------------------------------------
     * Table
     * --------------------------------------------------------------------------
     */
    protected $table = 'restaurants';
}
