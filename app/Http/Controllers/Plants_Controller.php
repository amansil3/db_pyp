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

        \DB::table('plants')->insert([
	        'nombre' => $request['nombreVulgar'],
	        'cientifico' => $request['nombreCientifico'],
	        'tipo' => $request['tipo'],
	        'cantidad' => $request['cantidad'],
	    ]);

        return view('subindex');
    }

    public function Delete(Request $request){
    	\DB::table('plants')
			->where('id', $request['$id'])
			->update(['estado' => false]);
    }
}
