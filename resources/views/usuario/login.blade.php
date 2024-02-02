@extends('layout.base')

@section('title', 'Login')

@section('conteudo')

    <div class="row justify-content-center">
        <form class='card text-center formulario' action="{{ route('entrar') }}" method="post">
            {{csrf_field()}}
            <h3>Login do Sistema</h3>
            <div class="m-4 field">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu email">

                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>
            <div class="m-4 field">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua Senha">

                @if ($errors->has('senha'))
                    @foreach ($errors->get('senha') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>
            <div class="">
                <a href="{{route('cadastrar')}}">Novo Usuario</a>
            </div>
            <button class="btn btn-primary rounded-pill px-3 mt-4" type="button submit">Entrar</button>
        </form>
    </div>
    @if ($teste==1)
        <div class="row mt-3 text-center">
            <h5>Sua email não existe ou está errado</h5>
        </div>
    @elseif($teste==2)
        <div class="row mt-3 text-center">
            <h5>Sua senha não está correta</h5>
        </div>
    @endif


@endsection
