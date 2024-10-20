@extends('layouts.master')

@section('title', 'Postagem One')

@section('content')

<div>
    <img src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}">
    <div>
        <p>Data da Postagem: {{ $postagem->data_postagem }}</p>
        <h5>Titulo: {{ $postagem->titulo }}</h5>
        <p>Conteudo: {{ $postagem->conteudo }}</p>
        <p>Autor: {{ $usuario[$postagem->id_usuario]->name ?? 'Desconhecido' }}</p>
    </div>
</div>

@endsection