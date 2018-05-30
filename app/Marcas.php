<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $fillable = ['marca','img_marca'];

    protected $table = "users";
}
