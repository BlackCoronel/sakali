<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    protected $fillable = [

        'id_m',
        'modelo',
        'slug',

    ];

    protected $table = 'modelos';
}
