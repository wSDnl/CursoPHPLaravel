<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function Fornecedores(){
        $fornecedores = '1';
        $fornArray = ['Nome' => 'Fornecedor 2' , 'Status' => 'Ativo' ];

        /// *** OPERADOR CONDICIONAL TERNÁRIO NATIVO PHP
        /// *** CONDIÇÃO ? TRUE : FALSE
        /// *** CONDIÇÃO ? TRUE : ( CONDIÇÃO ? TRUE : FALSE )
        $msg = isset($fornecedores) ? 'Com Valor' : 'Sem valor';
        echo $msg;

        return view('app.fornecedores.index' , ['fornArray' => $fornArray , 'fornecedores' => $fornecedores , 'fornecedoresEmpty' => $fornecedoresEmpty ]);
    }
}
