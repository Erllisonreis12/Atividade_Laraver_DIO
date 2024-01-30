<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as User;

class Usuario extends Controller
{
    public function salvar(Request $req)
    {
        if(User::cadastrar($req)){
            return response("Ok", 201);
        }
        else{
            return response("Erro", 409);
        }
    }
}
