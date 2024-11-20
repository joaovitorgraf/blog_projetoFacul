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

    <!-- Seção de ícones circulares (4 ícones) -->
    <div class="d-flex justify-content-center my-4">
        <div class="p-2"><span class="border rounded-circle p-4 d-block"></span></div>
        <div class="p-2"><span class="border rounded-circle p-4 d-block"></span></div>
        <div class="p-2"><span class="border rounded-circle p-4 d-block"></span></div>
        <div class="p-2"><span class="border rounded-circle p-4 d-block"></span></div>
    </div>

    <!-- Seção de artigos (Lista de posts) -->
    <div class="row my-5">
        <div class="col-md-8">
            <ul class="nav nav-tabs" id="myTab" style="font-family: Inter;" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="top-tab" data-bs-toggle="tab" data-bs-target="#top-tab-pane" type="button" role="tab" aria-controls="top-tab-pane" aria-selected="true">TOP ARTIGOS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="saude-tab" data-bs-toggle="tab" data-bs-target="#saude-tab-pane" type="button" role="tab" aria-controls="saude-tab-pane" aria-selected="false">Saúde</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="lazer-tab" data-bs-toggle="tab" data-bs-target="#lazer-tab-pane" type="button" role="tab" aria-controls="lazer-tab-pane" aria-selected="false">Lazer</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="entretenimento-tab" data-bs-toggle="tab" data-bs-target="#entretenimento-tab-pane" type="button" role="tab" aria-controls="entretenimento-tab-pane" aria-selected="false">Entretenimento</button>
                </li>
            </ul>
            @foreach($postagens as $postagem)
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
                    <div class="row"> <!-- aqui será fixo -->
                        <div class="row mt-5"> <!-- aqui será volátil -->
                            <div class="row">
                                <div class="col-sm-2">
                                    <span class="border rounded-circle p-4 d-block">
                                        <img style="width: 100%;" src="/img/usuario/{{ $usuario[$postagem->id_usuario]->foto }}" alt="{{ $postagem->titulo }}">
                                    </span>
                                </div>
                                <div class="col-sm-10 d-flex" style="align-items: center;">
                                    <h5>{{ $usuario[$postagem->id_usuario]->name ?? 'Desconhecido' }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8">
                                <div class="row" style="text-align: start; margin-left: 2%;">
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
                                        <h5 style="font-size: 0.8rem;"><i class="fa-regular fa-heart"></i> 12k</h5>
                                        <h5 style="font-size: 0.8rem; margin-left: 5%;"><i class="fa-regular fa-comments"></i> 100k</h5>
                                    </div>
                                    <div class="col-2 m-0 p-0">
                                        <h5 style="font-size: 0.8rem;"><i class="fa-solid fa-share"></i></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img style="width: 100%;" src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="tab-pane fade" id="saude-tab-pane" role="tabpanel" aria-labelledby="saude-tab" tabindex="0">Saúde</div>
            <div class="tab-pane fade" id="lazer-tab-pane" role="tabpanel" aria-labelledby="lazer-tab" tabindex="0">Lazer</div>
            <div class="tab-pane fade" id="entretenimento-tab-pane" role="tabpanel" aria-labelledby="entretenimento-tab" tabindex="0">Entretenimento</div>
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