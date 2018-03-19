
  @extends('/produtos/principal')

    @section('content')
    <h1>Novo Produto</h1>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="/estoque_laravel/produtos/salvar">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome">
      </div>

      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="text" class="form-control" name="valor" placeholder="Valor">
      </div>

      <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
      </div>

      <div class="form-group">
        <label for="tamanho">Tamanho</label>
        <input type="text" class="form-control" name="tamanho" placeholder="Tamanho">
      </div>

      <div class="form-group">
        <label for="tamanho">Categoria</label>
        <select class="form-control" name="categoria_id">
          @foreach($categorias as $cat)
            <option value="{{$cat->id}}">{{$cat->nome}}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @stop
