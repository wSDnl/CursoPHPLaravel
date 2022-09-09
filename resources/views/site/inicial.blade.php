@extends('site.layouts.body')
@section('titulo' , $titulo['titulo']) {{-- PASSAR PARAMETRO --}}
@section('body')
    inicio

    <h1>Partials</h1>
    @include('site.layouts._partials.teste') {{-- PARTIALS, NÃO PRECISA COLOCAR "blade.php" --}}

@endsection
