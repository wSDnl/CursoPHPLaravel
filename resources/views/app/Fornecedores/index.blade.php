{{-- COMENTARIO BLADE --}}
<h3>Fornecedor</h3>

@isset($fornecedores)
    Fornecedor existe
@endisset

@unless($fornArray["Status"] == 'Inativo') {{-- EXECUTA APENAS SE A CONDIÇÃO FOR FALSA --}}
    Nome: {{ $fornArray["Nome"] }} Status: {{ $fornArray["Status"] }}
@endunless

@if( count($fornArray) > 1)
    <h3>Existe mais de um fornecedor</h3>
    @foreach($fornArray as $value)
        <li>{{ $value }}</li>
    @endforeach
@else
    <h3>Existe apenas um fornecedor</h3>
        @foreach($fornArray as $value)
            <li>{{ $value }}</li>
        @endforeach
@endif

@php

    // COMENTARIO PHP NATIVO
    var_dump($fornArray);
    
@endphp