@extends('layouts.master')

@section('title', 'Usuario')

@section('content')

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div>
    <h2>Info Usuario -------------</h2>
    <img src="/img/usuario/{{ $usuario->foto }}" alt="{{ $usuario->name }}">
    <p>Nome: {{ $usuario->name }}</p>
    <p>Quantidade de Post: {{ $quanridadePost }}</p>
    <a href="/login/{{ $usuario->id }}/postagem">Criar Postagem</a>
    <div>
        <h2>Postagens ----------------------</h2>
        @foreach($postagens as $postagem)
        <div>
            <img src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}">
            <div>
                <p>Data da Postagem: {{ $postagem->data_postagem }}</p>
                <h5>Titulo: {{ $postagem->titulo }}</h5>
                <p>Conteudo: {{ $postagem->conteudo }}</p>
                <p>Autor: {{ $usuario->name ?? 'Desconhecido' }}</p>

                <a href="/postagem/{{ $postagem->id }}">Ver mais</a>
                <form action="{{ route('deletePostagem', $postagem->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar esta postagem?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection