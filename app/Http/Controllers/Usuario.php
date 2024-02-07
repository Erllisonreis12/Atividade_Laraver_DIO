<?php

namespace App\Http\Controllers;

use App\Models\Usuario as ModelsUsuario;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function cadastrar()
    {
        return view('usuario.cadastro');
    }

    public function login($num = 0){
        return view('usuario.login',["teste" => $num]);
    }

    public function salvar(Request $req)
    {
        $req->validate([
            "nome" => "required",
            "email" => "required|unique:usuario|email",
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

        $dados = ModelsUsuario::Entrar($req);

        if(empty($dados[0])){
            return redirect("/1");
        }else{
            if(self::validarSenha($dados[0], $req->input('senha'))){
                return view('usuario.sucesso',[
                "fulano" => $dados[0]['nome']
                ]);
            }else{
                return redirect("/2");
            }
        }


    }

    public function validarSenha(ModelsUsuario $teste, string $senha) {
        if(!empty($teste)){
            return Hash::check($senha, $teste['senha']);
        }else{
            return false;
        }
    }

}
