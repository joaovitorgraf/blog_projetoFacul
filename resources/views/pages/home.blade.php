@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div>
    <h2>Postagens</h2>
    <p>Todas as postagens</p>
    <div>
        @foreach($postagens as $postagem)
        <div>
            <img src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}">
            <div>
                <p>Data da Postagem: {{ $postagem->data_postagem }}</p>
                <h5>Titulo: {{ $postagem->titulo }}</h5>
                <p>Conteudo: {{ $postagem->conteudo }}</p>
                <p>Autor: {{ $usuario[$postagem->id_usuario]->name ?? 'Desconhecido' }}</p>

                <a href="/postagem/{{ $postagem->id }}">Ver mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection