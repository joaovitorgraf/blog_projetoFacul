@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div style="font-family: Kalnia; background-color: #cccccc;">

    <!-- Título do Blog -->
    <h1 class="display-3">NOME DO BLOG</h1>
    <p class="lead">Frase de impacto</p>

    <!-- Cards (3 blocos lado a lado) -->
    <div class="row my-5">
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 text-start">
                            <h5 class="card-title mb-0">Lorem Ipsum</h5>
                            <p class="card-text text-muted">Ipsum dummy</p>
                        </div>
                        <div class="col-4">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 text-start">
                            <h5 class="card-title mb-0">Lorem Ipsum</h5>
                            <p class="card-text text-muted">Ipsum dummy</p>
                        </div>
                        <div class="col-4">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8 text-start">
                            <h5 class="card-title mb-0">Lorem Ipsum</h5>
                            <p class="card-text text-muted">Ipsum dummy</p>
                        </div>
                        <div class="col-4">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção de artigos (Lista de posts) -->
    <div class="row my-5">
        <div class="col-md-8">

            <div class="row"> <!-- aqui será fixo -->
                <div class="row mt-5"> <!-- aqui será volátil -->
                    <div class="row">
                        <div class="col-sm-2">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                        <div class="col-sm-10 d-flex" style="align-items: center;">
                            <h5>Nome do colunista</h5>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8">
                        <div class="row" style="text-align: start; margin-left: 2%;">
                            <div class="col-12 m-0 p-0">
                                <h3>Titulo do artigo ficará aqui</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 m-0 p-0">
                                <h5 style="font-size: 0.8rem;">01 setembro 2024</h5>
                            </div>
                            <div class="col-6 m-0 p-0 d-flex flex-row justify-content-center">
                                <h5 style="font-size: 0.8rem; margin-left: 5%;"><i class="fa-regular fa-comments"></i> 100k</h5>
                            </div>
                            <div class="col-2 m-0 p-0">
                                <h5 style="font-size: 0.8rem;"><i class="fa-solid fa-share"></i></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img style="width: 100%;" src="https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?q=80&w=1476&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção lateral (lista de links) -->
        <div class="col-md-4">
            <h5 class="ms-4 d-flex justify-content-start mt-5 mb-4" style="font-family: Inter; font-weight: bold; font-size: 1rem;">Talvez você goste</h5>
            <ul class="list-unstyled ms-4">
                <li>
                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-2 m-0 p-0">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                        <div class="col-sm-4 ms-2 m-0 p-0" style="align-items: start;">
                            <a style="font-size: 0.9rem;">Nome Colunista</a>
                        </div>
                        <div class="col-sm-4 m-0 p-0 d-flex justify-content-end">
                            <input class="btn btn-secondary btn-sm" type="button" value="ver mais" style="font-size: 0.8rem;">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-2 m-0 p-0">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                        <div class="col-sm-4 ms-2 m-0 p-0" style="align-items: start;">
                            <a style="font-size: 90%;">Nome Colunista</a>
                        </div>
                        <div class="col-sm-4 m-0 p-0 d-flex justify-content-end">
                            <input class="btn btn-secondary btn-sm" type="button" value="ver mais" style="font-size: 0.8rem;">
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row mt-3 justify-content-center align-items-center">
                        <div class="col-sm-2 m-0 p-0">
                            <span class="border rounded-circle p-4 d-block"></span>
                        </div>
                        <div class="col-sm-4 ms-2 m-0 p-0" style="align-items: start;">
                            <a style="font-size: 90%;">Nome Colunista</a>
                        </div>
                        <div class="col-sm-4 m-0 p-0 d-flex justify-content-end">
                            <input class="btn btn-secondary btn-sm" type="button" value="ver mais" style="font-size: 0.8rem;">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


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