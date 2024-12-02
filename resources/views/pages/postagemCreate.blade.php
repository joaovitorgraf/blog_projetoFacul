@extends('layouts.master')

@section('title', 'Postagem')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="row w-50" style="margin: 0 auto; text-align: start;">
    <h2 style="margin-top: 10%; font-weight: 700; padding-left: 0;">Criar publicação</h2>
</div>
<div class="card w-50" style="margin: 0 auto; text-align: start;">
    <div class="card-body">

        <form action="{{ route('savePostagem') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_usuario" value="{{$id_usuario}}" required>

            <div class="row">
                <h2 style="color: #e0e0e0; font-weight: 700; font-size: 1.2rem;">Publicação</h2>
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteudo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Categoria</label>
                <select id="categoria" class="form-control" name="categoria">
                    <option selected>Escolher...</option>
                    <option value="tecnologia">Tecnologia</option>
                    <option value="ciencia">Ciência</option>
                    <option value="desenvolvimento">Desenvolvimento</option>
                    <option value="design">Design</option>
                    <option value="empreendedorismo">Empreendedorismo</option>
                    <option value="marketing">Marketing</option>
                    <option value="educacao">Educação</option>
                    <option value="saude">Saúde</option>
                    <option value="viagens">Viagens</option>
                    <option value="lifestyle">Lifestyle</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="capa" class="form-label">Foto de capa</label>
                <input type="file" class="form-control-file" id="capa" name="capa" required>
            </div>
            <div class="row mt-4">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

    </div>
</div>

@endsection