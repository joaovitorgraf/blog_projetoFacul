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

        <form action="{{ route('editarPostagem', $postagem->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <h2 style="color: #e0e0e0; font-weight: 700; font-size: 1.2rem;">Editar</h2>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" value="{{ old('titulo', $postagem->titulo) }}" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="5" required>{{ old('conteudo', $postagem->conteudo) }}</textarea>
            </div>

            <input type="hidden" value="{{ $postagem->categoria }}" class="form-control" id="categoria" name="categoria">

            <div class="mb-3">
                <label for="capa" class="form-label">Capa (opcional)</label>
                <input type="file" class="form-control" id="capa" name="capa">
                @if ($postagem->capa)
                <p class="mt-2">Capa atual: <a href="{{ asset('img/capa/'.$postagem->capa) }}" target="_blank">Ver capa</a></p>
                @endif
            </div>

            <div class="row mt-4">
                <button type="submit" class="btn btn-primary">Salvar edição</button>
            </div>
        </form>


    </div>
</div>

@endsection