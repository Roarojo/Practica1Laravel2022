<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicacionContoller extends Controller
{
    public function vistaMultiplicacion(){
        return view('formularios.multiplicacion');
     }
}
