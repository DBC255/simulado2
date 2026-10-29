<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produtos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'categoria',
        'marca',
        'descricao',
        'preco_custo',
        'preco_venda',
        'quantidade_disponivel',
        'estoque_minimo',
    ];

    public function movimentacao(): HasMany
    {
        return $this->hasMany(movimentacoes::class);
    }
}
