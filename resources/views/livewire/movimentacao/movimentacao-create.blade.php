<div>
    <div>
        <form class="" wire:submit='movimentar' action="">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">qual o produto movimentou</label>
    <select class="form-control"  wire:model='produto_id'  style="max-width: 120px; 	" name="" id="">
        @foreach ($produtos as $p)
            <option class="menu-item" value="{{ $p->id }}">{{$p->id}}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">quantidade movimentada</label>
    <input type="number" wire:model='quantidade' style="max-width: 120px;" class="form-control">
  </div>
  <div class="mb-3 form-field">
    <label for="exampleInputEmail1" style="">tipo de movimentação</label>
    <select name="" wire:model='tipo' class="form-control"  style="max-width: 120px;">
        <option value="entrada">entrada</option>
        <option value="saida">saida</option>
    </select>
  </div>
  <button type="submit" class="btn-solid theme-primary">criar movimentação</button>
        </form>
    </div>
    <div class="text-center" style="max-width: 820px; 	">
        <table class="table">
  <thead class="theme-inverse">
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">categoria</th>
      <th scope="col">marca</th>
      <th scope="col">descricao</th>
      <th scope="col">preco_custo</th>
      <th scope="col">preco_venda</th>
      <th scope="col">quantidade_disponivel</th>
      <th scope="col">estoque_minimo</th>
      <th>ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produtos as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->nome }}</td>
      <td>{{ $p->categoria }}</td>
      <td>{{ $p->marca }}</td>
      <td>{{ $p->descricao }}</td>
      <td>{{ $p->preco_custo }}</td>
      <td>{{ $p->preco_venda }}</td>
      <td>{{ $p->quantidade_disponivel }}</td>
      <td>{{ $p->estoque_minimo }}</td>
      <td>
        <a class="theme-inverse btn-solid btn-styled btn-sm rounded-pill" href="produtos/edit/{{ $p->id }}">editar</a>
        <button class="theme-danger btn-solid btn-styled btn-sm rounded-pill" type="submit"
         wire:click='delete({{ $p->id }})'>deletar</button>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
