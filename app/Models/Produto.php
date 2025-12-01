<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'qtd_estoque',
        'is_active',
        'id_categoria',
        'imagem'
    ];

    // Isso aqui permite agrupar os produtos por categoria - "chave estrangeira"
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    // Ha varios produtos em um item de pedido
    public function ItemPedido(){
        return $this->hasMany(ItemPedido::class);
    }
}
