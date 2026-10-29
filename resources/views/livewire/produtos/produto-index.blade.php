<div>
    <h3 class="text-center">Lista dos produtos</h4>
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
  <a href="/produtos/create" class="theme-secondary btn-solid btn-styled"><i class="bi bi-plus">+</i></a>

    {{-- Stop trying to control. --}}
</div>
