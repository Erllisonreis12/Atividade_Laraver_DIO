@extends('layout.base')

@section('title', 'Home')
@section('conteudo')
    <div class="m-3 p-3 text-center">
        <h1> Olá {{$fulano}}, seu cadastro foi realizado com sucesso!</h1>
        <a class="btn btn-lg btn-primary" href="{{route('login')}}">Voltar</a>
    </div>
@endsection

