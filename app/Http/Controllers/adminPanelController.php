<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Marcas;
use App\Modelos;

class adminPanelController extends Controller
{
    //Formularios para el panel de administrador

    public function marcasAltaForm(){

        return view('admin.layouts.alta.alta_marca');
    }

    public function modelosAltaForm(){

        $marcas = DB::table('marcas')->get();

        return view('admin.layouts.alta.alta_modelo', compact('marcas'));
    }

    public function marcasBajaForm(){

        $marcas = DB::table('marcas')->get();

        return view('admin.layouts.baja.borrar_marca', compact('marcas'));

    }

    //Acciones Marcas

    public function altaMarcas(Request $request){

        $this->validate($request,['marca' => 'required|unique:marcas']);

        $alta = new Marcas([

            'marca' => $request->get('marca'),
            'img_marca' => 'img/hola.png',

        ]);

        $alta->save();

        return redirect(url()->current())->with('status', 'Marca creada con éxito !!!');

    }

    public function borrarMarcas(Request $request){

        $this->validate($request,['marca' => 'required']);

        DB::table('marcas')->where('marca',$request->marca)->delete();

        return redirect(url()->current())->with('status','Se ha eliminado la marca con éxito !!!');

    }


    //Acciones Modelos

    public function altaModelos(Request $request){

        $this->validate($request,['marca' => 'required','modelo' => 'required|unique:modelos']);

        $marca = DB::table('marcas')->get()->where('marca',$request->marca);
        $alta = new Modelos([

            'id_m' => $marca[0]->id,
            'modelo' => strtoupper($request->get('modelo')),
            'slug' => str_slug($request->get('modelo'),'-')
        ]);

        $alta->save();

        return redirect(url()->current())->with('status', 'Modelo registrado con éxito !!!');

    }
}
