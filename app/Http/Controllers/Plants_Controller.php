<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantas;

class Plants_Controller extends Controller
{
    public function Index(){
        return view ('plants.plants'); 
    }
    public function ReceptForm(Request $request){
        $receptor = $request->all();
        return $receptor;
    }
}
