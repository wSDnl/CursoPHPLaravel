{{-- COMENTARIO BLADE --}}
<h3>Fornecedor</h3>

{{-- /// *** VERIFICA SE A VARIAVEL EXISTE --}}
@isset($fornArray[0]["id"])
    Fornecedor existe<br>
        {{-- /// *** VARIEVREL EXISTE MAS ESTÁ AVZIA --}}
        @empty($fornArray[0]["id"])
            VAZIA<br>
        @endempty
@endisset

<p>

@for($i = 0; $i < count($fornArray); $i++)
    {{ $fornArray[$i]["id"] }} / {{ $fornArray[$i]["Nome"] }} <br>
@endfor

<p>

{{-- WHILE COM MATRIZ --}}
@php $x = 0 @endphp
@while(isset($fornArray[$x]))
    {{ $fornArray[$x]["id"] }} / {{ $fornArray[$x]["Nome"] }} <br>
    @php $x++ @endphp
@endwhile



<p>


{{-- FOREACH --}}

@foreach($fornArray as $indice => $fornecedor)
    {{ $fornecedor["id"] }} / {{ $fornecedor["Nome"] }} <br>
@endforeach

<p>



@if( count($fornArray) > 1)
    <h3>Existe mais de um fornecedor</h3>

        @switch($fornecedores)
            @case('1')
                Ok 1
            @break

            @case('2')
                Ok 2
            @break

            @default
                Nenhum

        @endswitch

@else
    <h3>Existe apenas um fornecedor</h3>
@endif