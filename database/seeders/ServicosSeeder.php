<?php

namespace Database\Seeders;

use App\Models\Servico;
use App\Models\Servicos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servico::create([
            'user_id' => 1,
            'nome' => 'Instalação de Bomba Submersa',
            'descricao' => 'Instalação completa com teste de vazão.',
            'preco' => 350.00,
            'status' => 'ativo'
        ]);

        Servico::create([
            'user_id' => 1,
            'nome' => 'Manutenção de Painel Elétrico',
            'descricao' => 'Revisão geral e troca de componentes.',
            'preco' => 180.00,
            'status' => 'ativo'
        ]);

        Servico::create([
            'user_id' => 1,
            'nome' => 'Limpeza de Poço Artesiano',
            'descricao' => 'Serviço completo com análise de água.',
            'preco' => 250.00,
            'status' => 'ativo'
        ]);
    }
}
