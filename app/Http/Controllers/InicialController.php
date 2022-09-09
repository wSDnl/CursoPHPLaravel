<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicialController extends Controller
{
    public function inicial(){

        $matriz = ['titulo' => 'Inicio como Matriz'];

        return view('site.inicial',['titulo' => $matriz ]); /// *** ENVIAR MATRIZ PELO CONTROLADOR
    }
}
