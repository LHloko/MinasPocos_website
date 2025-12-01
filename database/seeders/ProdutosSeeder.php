<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\Produtos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Bomba Submersa Inox 900W',
            'descricao' => 'Modelo resistente com alta durabilidade.',
            'preco' => 899.90,
            'qtd_estoque' => 12,
            'is_active' => true,
            'id_categoria' => 1,
            'imagem' => 'bomba_inox.jpg'
        ]);

        Produto::create([
            'nome' => 'Bomba Periférica 1/2CV',
            'descricao' => 'Ideal para uso doméstico.',
            'preco' => 299.00,
            'qtd_estoque' => 35,
            'is_active' => true,
            'id_categoria' => 2,
            'imagem' => 'bomba_periferica.jpg'
        ]);

        Produto::create([
            'nome' => 'Painel de Controle Automático',
            'descricao' => 'Sistema completo de proteção elétrica.',
            'preco' => 450.00,
            'qtd_estoque' => 8,
            'is_active' => true,
            'id_categoria' => 3,
            'imagem' => 'painel_controle.jpg'
        ]);
    }
}
