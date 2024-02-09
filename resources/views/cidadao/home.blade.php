@extends('cidadao.base')

@section('titulo', 'Home')

@section('conteudo')
    <div class="m-3 p-3 text-center">
        <h1>
            @if ($fulano = Session::get('fulano'))
                Olá {{$fulano}}, Seja Bem Vindo ao seu Portal de Consultas!
            @endif
        </h1>
    </div>
@endsection
