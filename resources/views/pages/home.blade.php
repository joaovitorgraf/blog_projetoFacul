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
            <ul class="nav nav-tabs" id="myTab" role="tablist">
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
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
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
                                <h3>Titulo do artigo ficará aqui</h3>
                                <p>Aqui haverá um descritivo inicial sobre o artigo</p>
                            </div>
                            <div class="col-md-4">
                                <p>IMAGEM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="saude-tab-pane" role="tabpanel" aria-labelledby="saude-tab" tabindex="0">Saúde</div>
            <div class="tab-pane fade" id="lazer-tab-pane" role="tabpanel" aria-labelledby="lazer-tab" tabindex="0">Lazer</div>
            <div class="tab-pane fade" id="entretenimento-tab-pane" role="tabpanel" aria-labelledby="entretenimento-tab" tabindex="0">Entretenimento</div>
        </div>
    </div>

    <!-- Seção lateral (lista de links) -->
    <div class="col-md-4">
        <h5>Talvez você goste</h5>
        <ul class="list-unstyled">
            <li><a href="#">Título do Artigo 1</a></li>
            <li><a href="#">Título do Artigo 2</a></li>
            <li><a href="#">Título do Artigo 3</a></li>
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