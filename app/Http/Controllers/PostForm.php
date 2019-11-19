<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostForm extends Controller
{
    public function Index(Request $request){
        
        return $receptor = $request->all();

        return view ('contacts.contacts')->with('datos', $receptor);

    }
}
