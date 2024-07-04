<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrationcontroller extends Controller
{
    public function index(){
        return view ('About');
    }
    function register(Request $request)
    { //return $request;
        echo "<pre>";
        print_r($request->all());
      //echo $request->name;

    }
}

