<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contacts_Controller extends Controller
{
    public function Index(){
        return view('contacts.contacts');
    }
}
