<?php

/// *** INICIAL
Route::get('/','InicialController@inicial');

/// *** CADASTRO DE USUARIOS
Route::get('/CadastroUsuarios','CadastroUsuariosController@CadastroUsuarios');

/// *** LOGIN
Route::get('/Login','LoginController@Login');
/// *** OS PAREMETROS OPCIONAIS DEVEM SER DEFINIDOS DA DIREITA PATA ESQUERDA <<<<<
Route::get('/Login/{email?}/{senha?}', 
    function($email = 'Email não informado',$senha = 'Senha não informada'){
    echo 'Email: '. $email . '<br>';
    echo 'Senha: '. $senha . '<br>';
});

 