<?php

/// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| *** INICIAL
Route::get('/','InicialController@inicial');

/// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| *** CADASTRO DE USUARIOS
Route::get('/CadastroUsuarios','CadastroUsuariosController@CadastroUsuarios');
Route::get('/CadastroUsuarios/{id_usuario?}', 
    function($id_usuario = 0){
        echo 'Senha: '. $id_usuario . '<br>';
})->where('id_usuario','[0-9]+');

/// |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| *** LOGIN 
Route::get('/Login','LoginController@Login');
/// *** OS PAREMETROS OPCIONAIS DEVEM SER DEFINIDOS DA DIREITA PATA ESQUERDA <<<<<
Route::get('/Login/{email?}/{id_usuario?}', 
    function($email = 'Email não informado' , $id_usuario = 0){
        echo 'Email: '. $email . '<br>';
        echo 'Senha: '. $id_usuario . '<br>';
})->where('id_usuario','[0-9]+')->where('email','[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$');

 