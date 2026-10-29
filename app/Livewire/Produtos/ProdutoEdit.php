<?php

namespace App\Livewire\Produtos;

use App\Models\Produtos;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $categoria;
    public $marca;
    public $descricao;
    public $preco_custo;
    public $preco_venda;
    public $quantidade_disponivel;
    public $estoque_minimo;
    public $produtoID;

    public function mount($id){
        $produto = Produtos::findOrFail($id);
        $this->nome = $produto->nome;
        $this->categoria = $produto->categoria;
        $this->marca = $produto->marca;
        $this->descricao = $produto->descricao;
        $this->preco_custo = $produto->preco_custo;
        $this->preco_venda = $produto->preco_venda;
        $this->quantidade_disponivel = $produto->quantidade_disponivel;
        $this->estoque_minimo = $produto->estoque_minimo;
        $this->produtoID = $produto->id;
    }

    public function update(){
        $produto = Produtos::find($this->produtoID);
        $produto->nome = $this->nome;
        $produto->categoria = $this->categoria;
        $produto->marca = $this->marca;
        $produto->descricao = $this->descricao;
        $produto->preco_custo = $this->preco_custo;
        $produto->preco_venda = $this->preco_venda;
        $produto->quantidade_disponivel = $this->quantidade_disponivel;
        $produto->estoque_minimo = $this->estoque_minimo;

        $produto->update();
        return Redirect()->to('produtos');
    }

    public function render()
    {
        return view('livewire.produtos.produto-edit');
    }
}
