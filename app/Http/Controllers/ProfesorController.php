<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function agregar()
    {
        return view('profesor.agregar');
    }

    public function calificar()
    {
        return view('profesor.calificar');
    }
}
