<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function Fornecedores(){
        $fornecedores = '';
        $fornArray = ['Nome' => 'Fornecedor 2' , 'Status' => 'Ativo' ];
        return view('app.fornecedores.index' , ['fornArray' => $fornArray , 'fornecedores' => $fornecedores , 'fornecedoresEmpty' => $fornecedoresEmpty ]);
    }
}
