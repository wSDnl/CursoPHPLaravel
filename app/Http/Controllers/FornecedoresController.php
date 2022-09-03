<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function Fornecedores(){
        $fornArray = ['Fornecedor 1','Fornecedor 2'];
        return view('app.fornecedores.index' , ['fornArray' => $fornArray ]);
    }
}
