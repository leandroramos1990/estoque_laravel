
  @extends('/produtos/principal')

    @section('content')

    @if(old('nome'))
      <div class="alert alert-success">
          Produto {{old('nome')}} adicionado com sucesso
      </div>
    @endif

    <h1>Listagem de produtos</h1>

      <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Valor</th>
          <th scope="col">Tamanho</th>
          <th scope="col">Categoria</th>
          <th scope="col">See</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produtos as $p)
        <tr>
          <th scope="row">{{ $p->nome }}</th>
          <td>{{ $p->valor }}</td>
          <td>{{ $p->tamanho }}</td>
          <td>{{ $p->categoria->nome }}</td>
          <td>
            <a href="{{action('ProdutoController@visualizar', $p->id)}}">
              <i class="fas fa-search"></i>
            </a>
          </td>

          <td>
            <a href="{{action('ProdutoController@deletar', $p->id)}}">
              <i class="fas fa-trash"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @stop
