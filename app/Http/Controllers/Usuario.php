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

    public function salvar(Request $req)
    {
        $req->validate([
            "nome" => "required",
            "email" => "required|email",
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

}
