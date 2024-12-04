@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div style="font-family: Poppins;">

    <!-- Título do Blog -->
    <h1 class="display-3" style="font-weight: 600; margin-top: 15%;">FATOS EM PERSPECTIVA</h1>
    <p class="lead">Todo ângulo revela uma <a style="text-decoration: underline; color: #000; text-decoration-thickness: .8px;">nova história</a></p>


    <!-- Seção de artigos (Lista de posts) -->
    <div class="row justify-content-center" style="margin-top: 15%;">
        <div class="col-md-8">
            @foreach($postagens as $postagem)
            <div class="row mt-5"> <!-- aqui será volátil -->
                <div class="row">
                    <div class="col-sm-2">
                        <img class="border rounded-circle d-block" src="/img/usuario/{{ $usuario[$postagem->id_usuario]->foto }}" style="width: 100px; height: 100px; object-fit: contain;">
                    </div>
                    <div class="col-sm-10 d-flex p-0" style="align-items: center;">
                        <h5 style="font-size: 2rem;">{{ $usuario[$postagem->id_usuario]->name ?? 'Desconhecido' }}</h5>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="row" style="text-align: start; margin-left: 2%;">
                        <div class="col-12 m-0 p-0">
                            <h3>{{ $postagem->titulo }}</h3>
                            <p style="text-align: justify;">
                                {!! \Illuminate\Support\Str::limit($postagem->conteudo, 226, '...') !!}
                                <a href="/postagem/{{ $postagem->id }}" style="color: blue; text-decoration: underline;">Leia mais</a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 m-0 p-0" style="text-align: end;">
                            <h5 style="font-size: 0.8rem;">{{ $postagem->data_postagem }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img style="width: 196px; height: 196px; object-fit: contain;" src="/img/capa/{{ $postagem->capa }}">
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection