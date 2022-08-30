<?php

Route::get('/','InicialController@inicial');
Route::get('/Login','LoginController@Login');
Route::get('/CadastroUsuarios','CadastroUsuariosController@CadastroUsuarios');

Route::get('/Login/{email}/{senha}', 
    function($email,$senha){
    echo 'Email: '. $email . '<br>';
    echo 'Senha: '. $senha . '<br>';
});

 