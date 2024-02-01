<?php

namespace App\Http\Controllers;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Http\Request;
use Hash;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function login(){
        return view('usuario.login');
    }

    public function salvar(Request $req)
    {
        $req->validate([
            "nome" => "required",
            "email" => "required|email|unique",
            "senha" => "required|min:5"
        ]);

        if(ModelsUsuario::cadastrar($req)){
            return view('usuario.sucesso',[
            "fulano" => $req->input('nome')
            ]);
        }
        else{
            echo "Ops! Algo de errado não está certo";
        }

    }

    public function entrar(Request $req){
        $req->validate([
            "email" => "required|email",
            "senha" => "required|min:5"
        ]);

        $nome = ModelsUsuario::Entrar($req);

        if($nome){
            return view('usuario.sucesso',[
            "fulano" => $nome[0]['nome']
            ]);
        }else{
            self::login();
        }
    }

}
