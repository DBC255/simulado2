<?php

namespace Database\Seeders;

use App\Models\Produtos;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make(123)
        ]);

        Produtos::create([
            'nome' => 'ração de gato',
            'categoria' => 'racoes',
            'marca' => 'generica',
            'descricao' => 'ração para gatos',
            'preco_custo' => 32,
            'preco_venda' => 35,
            'quantidade_disponivel' => 1000,
            'estoque_minimo' => 10,
        ]);
    }
}
