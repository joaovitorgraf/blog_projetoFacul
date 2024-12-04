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
                <div class="col-6" style="text-align: start;">
                    <h5>Publicações</h5>
                </div>
                <div class="col-6">
                    <a class="btn btn-outline-primary" href="/login/{{ $usuario->id }}/postagem">Criar Postagem</a>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Sair</button>
                    </form>
                </div>
            </div>
            @foreach($postagens as $postagem)
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="row" style="text-align: start; margin-left: 1%;">
                        <div class="col-12 m-0 p-0">
                            <h3>{{ $postagem->titulo }}</h3>
                            <p>
                                {!! \Illuminate\Support\Str::limit($postagem->conteudo, 226, '...') !!}
                                <a href="/postagem/{{ $postagem->id }}" style="color: blue; text-decoration: underline;">Leia mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 m-0 p-0">
                            <h5 style="font-size: 0.8rem;">{{ $postagem->data_postagem }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img style="width: 196px; height: 196px; object-fit: contain;" src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}">
                </div>
            </div>
            <div class="row mt-2" style="text-align: start;">
                <div class="col-6">
                    <a href="/editar/{{ $postagem->id }}" class="btn btn-outline-secondary" type="submit">Editar</a>
                </div>
                <div class="col-6">
                    <form action="{{ route('deletePostagem', $postagem->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja deletar esta postagem?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-warning" type="submit">Deletar</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</div>

@endsection