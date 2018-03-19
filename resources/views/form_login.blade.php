
  @extends('/produtos/principal')

    @section('content')
    <h1>Novo Produto</h1>


    <form method="post" action="/estoque_laravel/login_validate">

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" name="password" placeholder="Senha">
      </div>


      <button type="submit" class="btn btn-primary">Login</button>
    </form>

    @stop
