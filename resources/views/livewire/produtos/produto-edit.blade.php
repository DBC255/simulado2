<div>
    <form wire:submit.provent='update'>
  <div class="mb-3">
    <label class="form-label">nome</label>
    <input type="text" wire:model='nome' class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">categoria</label>
<select wire:model='categoria' class="form-control">
    <option value="">selecione . . .</option>
    <option  class="menu-item" value="racoes" > rações</option>
    <option  class="menu-item" value="medicamentos" >medicamentos</option>
    <option  class="menu-item" value="brinquedos">brinquedos</option>
    <option  class="menu-item" value="acessorios">acessorios</option>
    <option  class="menu-item" value="higiene">higiene</option>
</select>

  <div class="mb-3">
    <label class="form-label">marca</label>
    <input type="text" wire:model='marca' class="form-control">
  </div>
  
  <div class="mb-3">
    <label class="form-label">descrição</label>
    <input type="text" wire:model='descricao' class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">preço custo</label>
    <input type="number" wire:model='preco_custo' class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">preço venda</label>
    <input type="number" wire:model='preco_venda' class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">quantidade disponivel</label>
    <input type="number" wire:model='quantidade_disponivel' class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">estoque minimo</label>
    <input type="number" wire:model='estoque_minimo' class="form-control">
  </div>
  
  <button type="submit" class="btn-solid theme-primary">enviar</button>
</form>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
