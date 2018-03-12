<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="/estoque_laravel/css/app.css">
    <link rel="stylesheet" href="/estoque_laravel/css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Listagem de produtos</title>
  </head>

  <body>
    <div class="container">

    <nav class="navbar navbar-default">
      <div class="container-fluid">

      <div class="navbar-header">
        <a class="navbar-brand" href="/estoque_laravel/produtos">Estoque Laravel</a>
      </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="/estoque_laravel/produtos">Listagem</a></li>
          <li><a href="/estoque_laravel/produtos/formulario">Novo</a></li>
        </ul>

      </div>
    </nav>

      @yield('content')

    <footer class="footer">
        <p>© Curso de Laravel do Alura.</p>
    </footer>

    </div>

  </body>
</html>
