@extends('layouts.master')

@section('title', 'Postagem One')

@section('content')

<div class="row justify-content-center align-items-center">
    <!--
    <div class="input-group" style="width: 500px; border: 1px solid #ccc; border-radius: 25px; overflow: hidden;">
        <input type="text" class="form-control" placeholder="Pesquise algo sobre esse artigo..." style="border: none; box-shadow: none; font-family: 'Kalia', sans-serif;">
        <div class="input-group-append">
            <span class="input-group-text" style="background: none; border: none;">
                <i class="fas fa-search" style="color: #ccc;"></i>
            </span>
        </div>
    </div> -->
    <div class="row justify-content-center align-items-center mb-5" style="background: linear-gradient(to top, black, transparent); border-radius: 2rem;">
        <img src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}" style="width: 50%; opacity: 48%; object-fit: contain;">
        <div class="text-start text-white" style="position: relative; z-index: 1;">
            <h1>{{ $postagem->titulo }}</h1>
            <p>Publicado em: {{ $postagem->data_postagem }}</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8" style="text-align: justify;">
            {{ $postagem->conteudo }}
        </div>
        <div class="col-4">
            <div class="row ms-2">
                <h2 class="m-0 p-0" style="font-weight: 700; font-size: 1rem; text-align: start;">Comentários sobre o artigo</h2>

                @foreach($comentarios as $comentario)
                <div class="row mt-4 justify-content-start align-items-center">
                    <div class="col-2">
                        <img class="rounded-circle d-block" src="/img/usuario/{{ $comentario->user->foto }}" style="width: 50px; height: 50px; object-fit: contain;">
                    </div>
                    <div class="col-8" style="align-items: start; text-align: start; margin-left: 5%;">
                        <a style="font-size: 0.7rem;">{{ $comentario->user->name }}</a></br>
                        <a style="font-size: 0.7rem;">{{ $comentario->created_at }}</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <p style="font-size: .8rem; text-align: start;">{{ $comentario->comentario }}</p>
                </div>
                @endforeach

                @if(auth()->check())
                <form action="{{ route('salvar.comentario') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_usuario" value="{{ $idUsuarioLogado }}" required>
                    <input type="hidden" name="id_postagem" value="{{ $postagem->id }}" required>

                    <div class="mb-3 mt-3" style="text-align: start;">
                        <label for="comentario" class="form-label">Fazer comentário</label>
                        <input class="form-control" id="comentario" name="comentario" required>
                    </div>
                    <div class="row" style="justify-content: end; margin-right: 1%;">
                        <button type="submit" class="btn btn-primary w-50">Comentar</button>
                    </div>

                </form>
                @endif
            </div>
        </div>
    </div>






    <div>
        <p>Autor: {{ $usuario[$postagem->id_usuario]->name ?? 'Desconhecido' }}</p>
    </div>
</div>

@endsection