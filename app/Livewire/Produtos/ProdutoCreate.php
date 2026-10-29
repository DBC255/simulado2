<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $categoria;
    public $marca;
    public $descricao;
    public $preco_custo;
    public $preco_venda;
    public $quantidade_disponivel;
    public $estoque_minimo;

    public function create(){
        Produtos::create([
            'nome' => $this->nome,
            'categoria' => $this->categoria,
            'marca' => $this->marca,
            'descricao' => $this->descricao,
            'preco_custo' => $this->preco_custo,
            'preco_venda' => $this->preco_venda,
            'quantidade_disponivel' => $this->quantidade_disponivel,
            'estoque_minimo' => $this->estoque_minimo,
        ]);

        return redirect()->to('/produtos');

    }

    public function render()
    {
        return view('livewire.produtos.produto-create');
    }
}
