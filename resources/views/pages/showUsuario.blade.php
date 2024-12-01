@extends('layouts.master')

@section('title', 'Usuario')

@section('content')

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<div>
    <div class="row" style="margin-top: 10%;">
        <div class="col-6">
            <img class="rounded-circle mb-3" width="400" height="400" src="/img/usuario/{{ $usuario->foto }}" alt="{{ $usuario->name }}">
            <h5 style="font-size: 2rem;">{{ $usuario->name }}</h5>
            <h5 style="font-size: 0.8rem; line-height: .3;">{{ $quanridadePost }} publicações</h5>
        </div>
        <div class="col-6">
            <div class="row mt-5">
                <h5>Publicações</h5>
            </div>
            @foreach($postagens as $postagem)
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="row" style="text-align: start; margin-left: 1%;">
                        <div class="col-12 m-0 p-0">
                            <h3>{{ $postagem->titulo }}</h3>
                            <p>{{ $postagem->conteudo }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 m-0 p-0">
                            <h5 style="font-size: 0.8rem;">{{ $postagem->data_postagem }}</h5>
                        </div>
                        <div class="col-6 m-0 p-0 d-flex flex-row justify-content-center">
                            <h5 style="font-size: 0.8rem; margin-left: 5%;"><i class="fa-regular fa-comments"></i> 100k</h5>
                        </div>
                        <div class="col-2 m-0 p-0">
                            <a href="/postagem/{{ $postagem->id }}">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img style="width: 100%;" src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}">
                </div>
            </div>
            <div class="row mt-2" style="text-align: start;">
                <form action="{{ route('deletePostagem', $postagem->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar esta postagem?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-secondary" type="submit">Deletar</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>


    <a href="/login/{{ $usuario->id }}/postagem">Criar Postagem</a>
</div>

@endsection