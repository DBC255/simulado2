<?php

namespace App\Livewire\Movimentacao;

use App\Models\Produtos;
use Livewire\Component;

class MovimentacaoCreate extends Component
{
    public $produto_id;
    public $tipo;
    public $quantidade;
    public function movimentar(){}
    public function render()
    {
        $produtos = Produtos::all();
        return view('livewire.movimentacao.movimentacao-create', compact('produtos'));
    }
}
