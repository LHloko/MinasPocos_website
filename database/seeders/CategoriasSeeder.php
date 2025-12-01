<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Bombas Submersas',
            'descricao' => 'Bombas para poços profundos e artesianos.'
        ]);

        Categoria::create([
            'nome' => 'Bombas de Superfície',
            'descricao' => 'Bombas para captação externa ou caixas d’água.'
        ]);

        Categoria::create([
            'nome' => 'Acessórios para Bombas',
            'descricao' => 'Conexões, cabos, painéis e controladores.'
        ]);
    }
}
