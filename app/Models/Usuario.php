<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Usuario extends Model
{

    protected $fillable = [
        'nome','email','senha'
    ];

    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite) {
        $sql = self::select([
            "id", "nome", "email","senha",
        ])->limit($limite);

        return $sql->get();
    }

    public static function cadastrar(Request $req){
        return self::create([
            'nome' => $req->input('nome'),
            'email' => $req->input('email'),
            'senha' => Hash::make($req->input('senha')),
        ]);
    }

    public static function entrar(Request $req) {
        $sql = self::select(["nome", "senha"])->where("email", $req->input('email'));
        return $sql->get();
    }
}
