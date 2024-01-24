<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Usuario extends Model
{

    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function listar(int $limite) {
        $sql = self::select([
            "id", "nome", "email","senha", "data_cadastro"
        ])->limit($limite);

        return $sql->get();
    }

    public static function cadastrar(Request $req){
        return DB::insert('insert into usuario (nome, email, senha, data_cadastro)
                    values (?, ?, ?, ?)', [
                    $req->input('nome'),
                    $req->input('email'),
                    Hash::make($req->input('senha')),
                    new Carbon()
                ]);
    }
}
