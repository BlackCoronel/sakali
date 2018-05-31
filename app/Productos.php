<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = ['nombre','id_m','id_mod','id_c','referencia','url_foto','descripcion'];

    protected $table = "productos";
}
