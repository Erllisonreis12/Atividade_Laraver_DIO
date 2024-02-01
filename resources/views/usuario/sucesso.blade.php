@extends('layout.base')

@section('title', 'Home')
@section('conteudo')
    <div class="m-3">
        <h1> Olá {{$fulano}}, seu cadastro foi realizado com sucesso!</h1>
        <a href="{{route('login')}}">Voltar</a>
    </div>
@endsection

