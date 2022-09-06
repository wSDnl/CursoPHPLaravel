<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function Fornecedores(){
        $fornecedores = '5';
        $while = 30;
        $fornArray = [0 => ['id' => '1' , 'Nome' => 'Fornecedor 1'],
                      1 => ['id' => '2' , 'Nome' => 'Fornecedor 2'],
                      2 => ['id' => '3' , 'Nome' => 'Fornecedor 3']
                     ];

        /// *** OPERADOR CONDICIONAL TERNÁRIO NATIVO PHP
        /// *** CONDIÇÃO ? TRUE : FALSE
        /// *** CONDIÇÃO ? TRUE : ( CONDIÇÃO ? TRUE : FALSE )
        $msg = isset($fornecedores) ? 'Com Valor' : 'Sem valor';
        echo $msg;

        return view('app.fornecedores.index' , ['fornArray' => $fornArray , 'fornecedores' => $fornecedores , 'while' => $while ]);
    }
}
