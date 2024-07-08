@extends('layouts.main') {{-- Diz quem é o pai da herança do código --}}

@section('title', 'HDC Events')

@section('content')
<h1>Algum Título</h1>
@if(10>5)
<p>A condição é true</p>
@elseif(0>-1)
<p>Entrou no elseif</p>
@else
<p>A condição é falsa</p>
@endif

<h2>Puxando dados passados pela rota</h2>
<p>Bem-vindo {{$nome}}, soube que você tem {{$idade}} anos e trabalha com {{$profissao}}</p>


@for($i = 0; $i< count($arr); $i++) <>{{$i}}</p>@endfor
    @php
    $nome = "Usando PHP puro dentro do blade";
    echo $nome

    @endphp


    @foreach ($nomes as $nome)
    <p>{{$loop ->index}} {{$nome}}</p>
    @endforeach


    @endsection