@extends('site.layouts.body')
@section('titulo' , $titulo['titulo']) {{-- PASSAR PARAMETRO --}}
@section('body')

<!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4>Cadastro de Usuários</h4>
                {{ $titulo["aviso"] }}
            </div>

        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="/Home/Index"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Cadastro de Usuários</li>
            </ul>
        </div>
    </div>
<!-- /page header -->
<!-- Basic layout-->

        <div class="panel panel-flat">
         

            <div class="panel-body">
               
            <form action="{{ route('site.cadastro-de-clientes') }}" method="POST">
                {{-- 
                    TOKEN QUE PERMITE O ENVIO VIA POST
                    MUITO IMPORTANTE
                    CASO OCORRA UMA REQUISIÇÃO Cross-site (REQUISIÇÃO MALICIOSA)
                    O CSRF TORNA O FORMULÁRIO LEGITIMO
                    O SERVIDOR RECUSA O FORMULARIO CASO NÃO POSSUA _token
                --}}
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome">
                </div>
                
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Salvar<i class="icon-arrow-right14 position-right"></i></button>
                </div>

            </form>

            </div>
        </div>
<!-- /basic layout -->



@endsection