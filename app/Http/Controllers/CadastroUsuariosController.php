<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuariosController extends Controller
{
    public function CadastroUsuarios(){

        $aviso  = "";
        $erro   = 1;
        $matriz = [ 'titulo' => 'Usuarios como Matriz' , 'aviso' => $aviso , 'erro' => $erro ];

        // SUPER GLOBAL GET
        if(isset($_GET["nome"])){
            $erro  = 0;
            $nome  = $_GET["nome"];
            $email = $_GET["email"];
            $senha = $_GET["senha"];

            /// *** REGRAS DE NEGÓCIO
            if($nome == '' || $nome == null){
                $erro++;
                $aviso .= " Preencha o Nome; ";
            }elseif ($email == '' || $email == null) {
                $erro++;
                $aviso .= " Preencha o E-mail; ";
            }elseif ($senha == '' || $senha == null) {
                $erro++;
                $aviso .= " Preencha a Senha; ";
            }else{
                
                $nomeEx = explode(" " , $nome);
                if(count($nomeEx) <= 1){
                    $erro++;
                    $aviso .= " Formato do [Nome] incorreto; ";
                }

                /// *** APLICA REGEX NO EMAIL
                $pattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/";
                if(preg_match($pattern, $email) == 0){
                    $erro++;
                    $aviso .= " E-mail inválido; ";
                }

            }

            /// *** FINALIZA REGRAS DE NEGÓCIO
        }
        
        
        if ($erro == 0) {
            return redirect()->route('resp.sucesso'); // REDIRECIONAMENTO DE ROTA
        }else{
            $matriz = [ 'titulo' => 'Usuarios como Matriz' , 'aviso' => $aviso ];
            return view('site.cadastroUsuarios' , ['titulo' => $matriz]);
        }

    }
}
