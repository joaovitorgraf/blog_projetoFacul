@extends('layouts.master')

@section('title', 'Login')

@section('content')
<div class="container mt-5">
    <h1>Usuario</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <form action="{{ route('validarLogin') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="capa" class="form-label">Email</label>
            <input type="email" class="form-control-file" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="capa" class="form-label">Senha</label>
            <input type="password" class="form-control-file" id="senha" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>

        <a href="/cadastro">Cadastrar</a>
    </form>
</div>
@endsection