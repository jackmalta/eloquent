<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dados</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Listagem de editoras</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">Editoras</div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>#</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($livros as $livro)
                  <tr>
                    <td>{{$livro->id}}</td>
                    <td>{{$livro->titulo}}</td>
                    <td>{{$livro->preco}}</td>
                    <td>{{$livro->editora_id}}</td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
    <script type="text/javascript" src="/js/app.js">

    </script>
  </body>
</html>
