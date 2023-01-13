<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'user_id',
        'nome_mae',
        'nome_pai',
        'cpf',
        'date_nascimento',
        'telefone',
        'cep',
        'cidade',
        'bairro',
        'logradouro'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function rules()
    {
        return [
            'nome' => 'required|min:10',
            'nome_mae'=> 'required|min:10',
            'nome_pai'=> 'required|min:10',
            'cpf'=> 'required|integer',
            'date_nascimento'=> 'required',
            'telefone'=> 'required|integer',
            'cep'=> 'required|integer',
            'cidade'=> 'required|min:3',
            'bairro'=> 'required|min:3',
            'logradouro'=> 'required|min:3',

        ];
    }
    public function feedback()
    {
        return [

            'required' => 'O campo :attribute é obrigatório!',
            'min' => 'O campo :attribute deve conter no minimo 10 caracteres',
            'nome.string' => 'O nome não pode contar numeros',
            'integer' => 'O campo :attribute deve conter apenas numeros',
            'cpf.min' => 'O CEP deve conter 11 digitos',
            'cpf.max' => 'O CEP deve conter 11 digitos',
            'cidade.min' => 'cidade deve conter no mínimo 3 caracteres',
            'bairro.min' => 'O bairro deve conter no mínimo 3 caracteres',
            'logradouro.min' => 'O logradouro deve conter no mínimo 3 caracteres',
        ];  
    }
}
