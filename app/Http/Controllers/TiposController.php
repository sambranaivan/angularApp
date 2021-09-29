<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
class TiposController extends Controller
{
    //


    public function get()
    {
        $tipos = tipo::all()->toArray();

        

        return response()->json($tipos,200);
    }
}
