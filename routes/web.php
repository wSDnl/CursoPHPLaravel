<?php

/// *** ROTAS PUBLICAS
/// ------------------------------------------------------------------------------------------------ *** INICIAL
Route::get('/','InicialController@inicial')->name('site.index');

/// ----------------------------------------------------------------------------------- *** CADASTRO DE USUARIOS
Route::get('/CadastroUsuarios','CadastroUsuariosController@CadastroUsuarios')->name('site.cadastro-de-clientes');
Route::get('/CadastroUsuarios/{id_usuario?}', 
function($id_usuario = 0){
    echo 'Senha: '. $id_usuario . '<br>';
})->where('id_usuario','[0-9]+');

/// -------------------------------------------------------------------------------------------------- *** LOGIN 
Route::get('/Login','LoginController@Login')->name('site.login');
/// *** OS PARAMETROS OPCIONAIS DEVEM SER DEFINIDOS DA DIREITA PATA ESQUERDA <<<<<
Route::get('/Login/{email?}/{id_usuario?}', 
    function($email = 'Email não informado' , $id_usuario = 0){
        echo 'Email: '. $email . '<br>';
        echo 'Senha: '. $id_usuario . '<br>';
})->where('id_usuario','[0-9]+')->where('email','[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$');


/// *** ROTAS PRIVADAS
Route::prefix('/app')->group( function(){

    ///-------------------------------------------------------------------------------------------- *** CLIENTES
    Route::get('/Clientes', function(){ 
        return 'Clientes';
    })->name('app.clientes');
    
    /// ------------------------------------------------------------------------------------------- *** PRODUTOS
    Route::get('/Produtos','ProdutosController@Produtos')->name('app.produtos');
    
    /// ------------------------------------------------------------------------------------------- *** PRODUTOS
    Route::get('/Fornecedores','FornecedoresController@Fornecedores')->name('app.fornecedores');
     
});

/// *** ROTAS PRIVADAS
/// ------------------------------------------------------------------------------------------------ *** SUCESSO
Route::prefix('/resp')->group( function(){
    
    Route::get('/sucesso', function(){        
        echo '[SUCESSO]';
    })->name('resp.sucesso');
    
    Route::get('/erro', function(){
        echo '[ERRO]';
    })->name('resp.erro');

});

Route::get('/teste/{p1}/{p2}','TesteController@teste')->name('teste');



/// *** -------------------------------------------------------------------------------- ROTA DE FALLBACK [ERRO]
/*
Route::fallback( function(){
    echo "A rota acessada não existe<br>";
    echo "<a href=". route('site.index') .">Voltar ao Inicio</a>";
});
*/