<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function Index{
        return view("index");
    }
}
