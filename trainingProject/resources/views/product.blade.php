@extends('layouts.main') {{-- Diz quem é o pai da herança do código --}}

@section('title', 'Produto')

@section('content')


@if ($id != null)
<p>Exibindo produto com id: {{$id}}</p>
@else

@endif