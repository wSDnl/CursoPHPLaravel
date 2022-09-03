{{-- COMENTARIO BLADE --}}
<h3>Fornecedor</h3>


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
    //var_dump($fornArray);
    
@endphp