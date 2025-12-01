<?php

namespace Database\Seeders;

use App\Models\ItemPedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemPedido::create([
            'id_pedido' => 1,
            'id_produto' => 1,
            'quantidade' => 1,
            'preco_unid' => 899.90
        ]);

        ItemPedido::create([
            'id_pedido' => 2,
            'id_produto' => 2,
            'quantidade' => 1,
            'preco_unid' => 299.00
        ]);

        ItemPedido::create([
            'id_pedido' => 3,
            'id_produto' => 3,
            'quantidade' => 1,
            'preco_unid' => 450.00
        ]);
    }
}
