<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cidadao extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome','email','senha'
    ];

    protected $connection = 'mysql';
    protected $table = 'usuario';

    public static function home_cidadao(){
        return view('cidadao.home');
    }

    public function meusDados() {
        return view('cidadao.dados');
    }
}
