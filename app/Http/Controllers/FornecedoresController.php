<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function Fornecedores(){
        return view('app.fornecedores.index');
    }
}
