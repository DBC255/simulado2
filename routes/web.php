<?php

use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use App\Livewire\Produtos\ProdutoCreate;
use App\Livewire\Produtos\ProdutoEdit;
use App\Livewire\Produtos\ProdutoIndex;
use App\Livewire\User\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('/produtos/create', ProdutoCreate::class)->name("produto.create");
Route::get('/produtos', ProdutoIndex::class)->name("produto.index");
Route::get('/produtos/edit/{id}', ProdutoEdit::class)->name("produto.edit");

Route::get('/movimentacoes', MovimentacaoIndex::class);
Route::get('/movimentacoes/create', MovimentacaoCreate::class);