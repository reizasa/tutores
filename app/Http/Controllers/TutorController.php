<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function buscar()
    {
        return view('tutor.buscar');
    }

    public function consultar()
    {
        return view('tutor.consultar');
    }

}
