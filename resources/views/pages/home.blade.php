@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div style="font-family: Kalnia;">

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
        <div class="mb-4">
          <h5>Título do Artigo Que Será Destaque</h5>
          <small class="text-muted">Categoria - Data</small>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia erat vel dapibus tincidunt.</p>
        </div>
        <div class="mb-4">
          <h5>Título Do Artigo Que Será Destaque</h5>
          <small class="text-muted">Categoria - Data</small>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia erat vel dapibus tincidunt.</p>
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