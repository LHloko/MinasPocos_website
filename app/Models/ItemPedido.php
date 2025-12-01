<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $fillable = [
        'id_pedido',
        'id_produto',
        'quantidade',
        'preco_unid'
    ];

    // Relacionamentos 
    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

    public function produtos(){
        return $this->belongsTo(Produto::class);
    }
}
