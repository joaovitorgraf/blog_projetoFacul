@extends('layouts.master')

@section('title', 'Postagem')

@section('content')
<div class="container mt-5">
    <h1>Postagem</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('savePostagem') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_usuario" value="{{$id_usuario}}" required>
        
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="mb-3">
            <label for="conteudo" class="form-label">Conteudo</label>
            <textarea class="form-control" id="conteudo" name="conteudo" rows="5" required></textarea>
        </div>

        <div class="mb-3">
            <label for="capa" class="form-label">Capa</label>
            <input type="file" class="form-control-file" id="capa" name="capa" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
