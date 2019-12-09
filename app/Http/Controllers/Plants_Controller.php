<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantas;

class Plants_Controller extends Controller
{
    public function Index(){
    	
    	$query = \DB::table('plants')->get();

        return view('plants.plants', ['plants' => $query]);
    }
    public function ReceptForm(Request $request){
        /*
        \DB::table('plants')->insert([
	        'nombre' => $request['nombreVulgar'],
	        'cientifico' => $request['nombreCientifico'],
	        'tipo' => $request['tipo'],
	        'cantidad' => $request['cantidad'],
	    ]);
        */

        $planta = new Plantas;

            $planta->nombre = $request->nombreVulgar;
            $planta->cientifico = $request->nombreCientifico;
            $planta->tipo = $request->tipo;
            $planta->cantidad = $request->cantidad;

        $planta->save();

        return view('subindex');
    }

    public function Update(Request $request){

        $plantaDelete = Plantas::find($request['id']);
            $plantaDelete->nombre = $request->nombreVulgar;
            $plantaDelete->cientifico = $request->nombreCientifico;
            $plantaDelete->tipo = $request->tipo;
            $plantaDelete->cantidad = $request->cantidad;
        $plantaDelete->save();

    }

    public function Delete(Request $request){
    	/*\DB::table('plants')
			->where('id', $request['$id'])
			->update(['estado' => false]);*/

        $plantaDelete = Plantas::find($request['id']);
            $plantaDelete->estado = false;
        $plantaDelete->save();

    }
}
