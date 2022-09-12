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
               
                @component('site.layouts._components.form_cadastro')
                @endcomponent

            </div>
        </div>
<!-- /basic layout -->



@endsection