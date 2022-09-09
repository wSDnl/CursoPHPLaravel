<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuariosController extends Controller
{
    public function CadastroUsuarios(){

        $matriz = ['titulo' => 'Usuarios como Matriz'];

        return view('site.cadastroUsuarios' , ['titulo' => $matriz]);
    }
}
