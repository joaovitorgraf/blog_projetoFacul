@extends('layouts.master')

@section('title', 'Usuario')

@section('content')
<div class="container mt-5">
    <h1>Usuario</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>8
    @endif

    <form action="{{ route('saveUser') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="capa" class="form-label">Email</label>
            <input type="email" class="form-control-file" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="capa" class="form-label">Senha</label>
            <input type="password" class="form-control-file" id="senha" name="password" required>
        </div>

        <div class="mb-3">
            <label for="capa" class="form-label">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto" required>
        </div>

        <input type="hidden" name="tipo_usuario" value="C" required>
        <input type="hidden" name="solicitacao" value="False" required>
        <input type="hidden" name="permissao" value="False" required>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
