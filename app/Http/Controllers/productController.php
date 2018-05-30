<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function mostrarMarcas(){

        $marcas = DB::table('marcas')->orderBy('marca')->get();

        return view('layouts.productos', compact('marcas'));
    }

    public function mostrarCategorias($marca){

        $marcas = DB::table('marcas')->orderBy('marca')->get();
        $marca = ['marca' => $marca];
        $id = DB::table('marcas')->where('marca',$marca)->get();
        $modelos = DB::table('modelos')->where('id_m',$id[0]->id)->get();

        return view('layouts.modelos',compact('marcas', 'modelos', 'marca'));

    }

    public function mostrarProductos($marca, $modelo){

        $marcas = DB::table('marcas')->orderBy('marca')->get();
        $logo = DB::table('marcas')->where('marca',$marca)->get();
        $marca = ['marca' => $marca, 'img_marca' =>$logo[0]->img_marca ];
        $id = DB::table('marcas')->where('marca',$marca)->get();
        $id_mod = DB::table('modelos')->where('slug',strtoupper($modelo))->get();
        $modelos = DB::table('modelos')->where('id_m',$id[0]->id)->get();
        $salida = [];

        $categorias = [];

        $productos = DB::table('productos')->where([
            ['id_m' ,'=', $id[0]->id],
            ['id_mod', '=',$id_mod[0]->id_mod]
        ])->get();

        foreach ($productos as $producto){

                $categorias[] += $producto->id_c;
        }

        $categorias = array_unique($categorias);

        foreach ($categorias as $categoria){

            $cat = DB::table('categorias')->where('id_c',$categoria)->get();

            $salida[] .= $cat[0]->nombre;
        }

       return view('layouts.mostrar_productos', compact('marcas', 'modelos','marca','salida', 'productos','categorias','modelo'));

    }


}
