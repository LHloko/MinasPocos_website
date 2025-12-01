<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'id_pedido',
        'valor',
        'status',
        'codigo_transacao',
        'gateway'
    ];

    // Relacionamento 
    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }
}
