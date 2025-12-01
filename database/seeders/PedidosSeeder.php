<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run(): void
    {
        Pedido::create([
            'user_id' => 1,
            'total' => 899.90,
            'status' => 'pago',
            'nome_noPedido' => 'João Silva',
            'email_noPedido' => 'joao@email.com',
            'telefone_noPedido' => '31999990000',
            'rua' => 'Rua A',
            'numero' => '100',
            'bairro' => 'Centro',
            'cidade' => 'Leopoldina',
            'estado' => 'MG',
            'cep' => '36700000'
        ]);

        Pedido::create([
            'user_id' => 1,
            'total' => 299.00,
            'status' => 'pendente',
            'nome_noPedido' => 'Maria Souza',
            'email_noPedido' => 'maria@email.com',
            'telefone_noPedido' => '32988887777',
            'rua' => 'Rua B',
            'numero' => '55',
            'bairro' => 'Fátima',
            'cidade' => 'Cataguases',
            'estado' => 'MG',
            'cep' => '36770000'
        ]);

        Pedido::create([
            'user_id' => 1,
            'total' => 450.00,
            'status' => 'pago',
            'nome_noPedido' => 'Carlos Andrade',
            'email_noPedido' => 'carlos@email.com',
            'telefone_noPedido' => '32997776666',
            'rua' => 'Rua C',
            'numero' => '220',
            'bairro' => 'Centro',
            'cidade' => 'Recreio',
            'estado' => 'MG',
            'cep' => '36743000'
        ]);
    }
}
