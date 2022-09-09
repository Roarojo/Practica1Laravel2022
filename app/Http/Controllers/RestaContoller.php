<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaContoller extends Controller
{
    public function vistaResta(){
        return view('formularios.resta');
     }
}
