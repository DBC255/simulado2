<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function delete($id){
        $produto = Produtos::find($id);
        $produto->delete();
    }

    public function render()
    {
        $produtos = Produtos::all();
        return view('livewire.produtos.produto-index', compact('produtos'));
    }
}
