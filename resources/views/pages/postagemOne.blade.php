@extends('layouts.master')

@section('title', 'Postagem One')

@section('content')

<div class="row justify-content-center align-items-center">
    <div class="input-group" style="width: 500px; border: 1px solid #ccc; border-radius: 25px; overflow: hidden;">
        <input type="text" class="form-control" placeholder="Pesquise algo sobre esse artigo..." style="border: none; box-shadow: none; font-family: 'Kalia', sans-serif;">
        <div class="input-group-append">
            <span class="input-group-text" style="background: none; border: none;">
                <i class="fas fa-search" style="color: #ccc;"></i>
            </span>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mb-5" style=" background: linear-gradient(to top, black, transparent); border-radius: 2rem;">
        <img src="/img/capa/{{ $postagem->capa }}" alt="{{ $postagem->titulo }}" style="width: 50%; opacity: 48%;">
        <div class="text-start text-white" style="position: relative; z-index: 1;">
            <h1>{{ $postagem->titulo }}</h1>
            <p>Publicado em: {{ $postagem->data_postagem }}</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8">
            {{ $postagem->conteudo }}
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center mt-5">
                <div class="card" style="width: 18rem; border-radius: 10px;">
                    <div class="card-body text-center">
                        <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-circle mb-3" width="100" height="100">
                        <h5 class="card-title mb-2">Ari Evans</h5>
                        <p class="card-text" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <h2 class="m-0 p-0" style="font-weight: 700; font-size: 1rem; text-align: start;">Comentários sobre o artigo</h2>
                <div class="row mt-4 justify-content-start align-items-center">
                    <div class="col-sm-2 m-0 p-0">
                        <span class="border rounded-circle p-4 d-block"></span>
                    </div>
                    <div class="col-sm-4 ms-2 m-0 p-0" style="align-items: start; text-align: start;">
                        <a style="font-size: 0.9rem;">Nome do Usuário</a>
                        <a style="font-size: 0.9rem;">12/05/2024</a>
                    </div>
                </div>
                <div class="row mt-2">
                    <p style="font-size: .8rem; text-align: start;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                </div>
            </div>
        </div>
    </div>






    <div>
        <p>Autor: {{ $usuario[$postagem->id_usuario]->name ?? 'Desconhecido' }}</p>
    </div>
</div>

@endsection