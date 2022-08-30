<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuariosController extends Controller
{
    public function CadastroUsuarios(){
        return view('site.cadastroUsuarios');
    }
}
