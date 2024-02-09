@extends('layout.basehome')

@section('menu')
    <ul class="nav text-center fs-5">
        <li class="nav-item p-3">
            <a class="nav-link text-white" href="#">Marcar Consulta</a>
        </li>
        <li class="nav-item p-3">
            <a class="nav-link text-white" href="#">Histórico de Consultas</a>
        </li>
        <li class="nav-item dropdown text-white p-3">
            <a class="nav-link dropdown-toggle text-white" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                <img src="{{asset("img/perfil.png")}}">
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('home_dados')}}">Meus dados</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Sair</a></li>
            </ul>
        </li>
    </ul>
@endsection
