<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <!--inicio do formulario-->
  <form action="login.php" class="container card p-3 m-3" method="post">
    <h1 class="text-center">Login</h1>
    <div class="mb-3">
       <label for="nome" class="form-label">nome</label>
       <input type="text"  name= "nome" class="form-control" id="nome">
    </div>
    <div class="mb-3">
       <label for="senha" class="form-label">senha</label>
       <input type="password" name= "senha" class="form-control" id="senha">
    </div>
     <button class="btn btn-primary col-2"> Entrar no Sistema</button>
  </form> <!--fim do formulário-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>