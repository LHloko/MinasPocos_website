<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'user_id',
        'nome',
        'descricao',
        'preco',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
