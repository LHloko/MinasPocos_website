<?php

namespace App\Models;

use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        
        'total',
        'status',
        'nome_noPedido',
        'email_noPedido',
        'telefone_noPedido',
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep'
    ];

    // Relacionamentos 

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->hasMany(ItemPedido::class);
    }

    public function pagamento(){
        return $this->hasOne(Pagamento::class);
    }
}
