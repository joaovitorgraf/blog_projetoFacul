@extends('layouts.master')

@section('title', 'Usuario')

@section('content')

<div class="container-fluid" style="margin-top: 10%; width: 80%; background-color: #8B8B8B; box-shadow: rgb(0 0 0 / 10%) 20px 24px 40px -5px, rgb(0 0 0 / 4%) 0px 10px 10px -5px;">
    <div class="row" style="justify-content: center;">
        <div class="col-6" style="padding-left: 0;">
            <div id="loading" class="spinner-border text-light" style="display: none; align-items: center; margin-left: 45%; margin-top: 40%; width: 5rem; height: 5rem;" role="status"></div>
            <img id="conteudo" src="/img/login/bona.png" style="width: 100%;">
        </div>
        <div class="col-6" style="background-color: #ffff;">
            <div class="container-fluid" style="width: 60%; margin-top: 10%; margin-left: 20%;">
                <div class="row" style="margin-bottom: 10%;">
                    <h5 style="text-align: start; padding-left: 0; margin-bottom: 5%;"><b>Cadastrar</b></h5>
                    <p style="text-align: start; color: #8B8B8B; padding-left: 0; line-height: 110%;">Bem-vindo! Cadastre-se para acessar</p>
                    @if(session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="container-fluid" style="width: 60%;">
                <form action="{{ route('saveUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <label for="#name" style="color: #8B8B8B; font-size: 0.9rem; padding-left: 0; text-align: start;">Nome</label>
                        <input type="text" name="name" id="name" style="border-radius: 0.3rem; border: 1px solid #BEBCBC; height: 2.5rem;" required>
                        <label for="#email" style="color: #8B8B8B; margin-top: 8%; font-size: 0.9rem; padding-left: 0; text-align: start;">Email</label>
                        <input type="email" name="email" id="email" style="border-radius: 0.3rem; border: 1px solid #BEBCBC; height: 2.5rem;" required>
                        <label for="#senha" style="color: #8B8B8B; margin-top: 8%; font-size: 0.9rem; padding-left: 0; text-align: start;">Senha</label>
                        <input type="password" name="password" id="senha" style="border-radius: 0.3rem; border: 1px solid #BEBCBC; height: 2.5rem; margin-bottom: 8%;" required>
                        <label for="capa" class="form-label" style="color: #8B8B8B; font-size: 0.9rem;text-align: start;">Foto de perfil</label>
                        <input type="file" class="form-control-file" id="foto" name="foto" required>

                        <input type="hidden" name="tipo_usuario" value="C">
                        <input type="hidden" name="solicitacao" value="False">
                        <input type="hidden" name="permissao" value="False">

                        <button type="submit" class="btn btn-primary mt-4" style="color: #ffff; height: 2.8rem; font-size: 1.2rem;"><b>Cadastrar</b></button>
                        <a href="/login" style="margin-bottom: 20%; margin-top: 2%;">Fazer login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection