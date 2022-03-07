<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'telefone', 'cpf', 'placa'];

    public function rules()
    {
        return [ 'nome'=> 'required',
                 'cpf'=> 'required | unique:clientes',
                 'telefone'=> 'required',
                 'placa'=> 'required |  unique:clientes', ];
    } 

    public function feedbacks()
    {
        return [ 'required'=>'Campo :attributes deve ser preenchido',
                 'cpf.unique'=>'CPF já cadastrado!',
                 'placa.unique'=>'Placa de carro já cadastrada',];
        
    } 

}
