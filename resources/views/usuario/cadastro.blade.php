@extends('layout.base')

@section('title', 'Cadastro de usuário')

@section('conteudo')

    <div class="row justify-content-center">
        <form class='card text-center m-5 p-5 formulario' action="{{ route('salvar') }}" method="post">
            {{csrf_field()}}

            <div class="m-5">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Seu email">

                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>
            <div class="m-5">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Sua Senha">

                @if ($errors->has('senha'))
                    @foreach ($errors->get('senha') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>
            <button type="buttom" class="btn btn-primary"></button>

            {{-- <div class="field">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" />

                @if ($errors->has('nome'))
                    @foreach ($errors->get('nome') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>

            <div class="field">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" />

                @if ($errors->has('email'))
                    @foreach ($errors->get('email') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>

            <div class="field">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" />

                @if ($errors->has('senha'))
                    @foreach ($errors->get('senha') as $erro)
                        <strong class="error">{{$erro}}</strong>
                    @endforeach
                @endif
            </div>

            <div class="btn">
                <button type="submit">Salvar</button>
            </div> --}}

        </form>
    </div>
@endsection
