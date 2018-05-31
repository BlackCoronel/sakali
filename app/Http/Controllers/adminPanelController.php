<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Marcas;
use App\Modelos;
use App\Productos;

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

    public function productosAltaForm(){

        $marcas = DB::table('marcas')->get();
        $categorias = DB::table('categorias')->get();

        return view('admin.layouts.alta.alta_producto',compact('marcas','categorias'));
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

    //Accciones Productos

    public function altaProductos(Request $request){

        $this->validate($request,[

            'marca' => 'required',
            'modelo' => 'required',
            'categoria' => 'required',
            'referencia' => 'required',
            'descripcion' => 'required|max:2000',

        ]);


        $modelo = DB::table('modelos')->where('modelo',$request->modelo)->get();

        $alta = new Productos([

            'marca' => $modelo->id_m,
            'modelo' => $modelo->id_mod,
            'categoria' => $request->categoria,
            'referencia' => $request->referencia,
            'descripcion' => $request->descripcion,
            'url_fotos' => 'hola soy las fotos',

        ]);

        $alta->save();

        return view('admin.layouts.alta.alta_producto')->with('status','El producto se ha registrado con éxito!!!');


    }

    public function cargarModelos(){

        $salida = [];

        $modelos = DB::table('modelos')->get();

        header("Content-Type: application/xml");

        foreach ($modelos as $modelo){

            $salida[] = "<modelo>
                    <id_modelo>".$modelo->id_mod."</id_modelo>
                    <id_marca>".$modelo->id_m."</id_marca>
                    <nombre>".$modelo->modelo."</nombre>
                </modelo>";
        }

        echo "<modelos>". implode($salida) . "</modelos>";

        return view('admin.cargarModelos');
    }
}
