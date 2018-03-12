
  @extends('/produtos/principal')

    @section('content')
    <h1>Novo Produto</h1>

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
        <label for="valor">Quantidade</label>
        <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @stop
