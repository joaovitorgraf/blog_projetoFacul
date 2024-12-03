@extends('layouts.master')

@section('title', 'Postagem')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row w-50" style="margin: 0 auto; text-align: start;">
    <h2 style="margin-top: 10%; font-weight: 700; padding-left: 0;">Editar publicação</h2>
</div>
<div class="card w-50" style="margin: 0 auto; text-align: start;">
    <div class="card-body">

        <form action="{{ route('savePostagem') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <h2 style="color: #e0e0e0; font-weight: 700; font-size: 1.2rem;">Editar</h2>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" value="{{ $postagem->titulo }}" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteudo</label>
                <textarea class="form-control"  id="conteudo" name="conteudo" rows="5" required>{{ $postagem->conteudo }}</textarea>
            </div>

            <input type="hidden" value="{{ $postagem->id_usuario }}" class="form-control" id="id_usuario" name="id_usuario" required>
            <input type="hidden" value="{{ $postagem->categoria }}" class="form-control" id="categoria" name="categoria" required>
            <input type="hidden" value="{{ $postagem->capa }}" class="form-control" id="capa" name="capa" required>
            
            
            <div class="row mt-4">
                <button type="submit" class="btn btn-primary">Salvar edição</button>
            </div>
        </form>

    </div>
</div>

@endsection