<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editora</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Detalhes da editora</h1>

      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading"><strong>Editora</strong></div>
            <ul class="list-group">
              <li class="list-group-item">{{$editora->nome}}</li>
              <li class="list-group-item">{{$editora->email}}</li>
            </ul>
          </div>

        </div>

      </div>

    </div>
    <script type="text/javascript" src="/js/app.js">

    </script>
  </body>
</html>
