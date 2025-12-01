<?php

namespace Database\Seeders;

use App\Models\Pagamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pagamento::create([
            'id_pedido' => 1,
            'valor' => 899.90,
            'status' => 'pago',
            'codigo_transacao' => 'TRX001',
            'gateway' => 'pix'
        ]);

        Pagamento::create([
            'id_pedido' => 2,
            'valor' => 299.00,
            'status' => 'pendente',
            'codigo_transacao' => 'TRX002',
            'gateway' => 'cartao'
        ]);

        Pagamento::create([
            'id_pedido' => 3,
            'valor' => 450.00,
            'status' => 'pago',
            'codigo_transacao' => 'TRX003',
            'gateway' => 'pix'
        ]);
    }
}
