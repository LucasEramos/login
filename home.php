<?php
 session_start ();

  if (!isset($_SESSION['usuario'])) {
    //Se a sessão não estiver definida, redirecione para a pagina de login
   header('Location: indexphp');
    exit();
}

require_once("conexao.php");
$sql = "SELECT * FROM usuario";
$usuario = $conn ->query($sql);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <body>
 </html>
 <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="btn btn-primary" href="home.php"> Home</a>  
            </li>
        </ul>
        <div clas="d-flex">
               <span class="form-control m-2">
               <?php
                  echo "Seja bem vindo: ". $_SESSION['usuario'];
               ?>
               </span>
               <a href= "sair.php" class="btn btn-danger">sair</a>
        </div>
       </div>
      </div>
    </nav>
    <!--inicio do formulario-->
  <form action="cadastra.php" class="container card p-3 m-3" method="post">
    <h1 class="text-center">Cadastrar novo usuario</h1>
    <div class="mb-3">
       <label for="nome" class="form-label">nome</label>
       <input type="text"  name= "nome" class="form-control" id="nome">
    </div>
    <div class="mb-3">
       <label for="senha" class="form-label">senha</label>
       <input type="password" name= "senha" class="form-control" id="senha">
    </div>
     <button class="btn btn-primary col-2">Cadastra</button>
  </form> <!--fim do formulário-->
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php
         // Usa foreach para percorrer os resuldados
         foreach($usuario as $usuario) {
      ?>

    <tr>
      <th><?php echo $usuario['id']; ?></th>
      <td><?php echo $usuario['nome']; ?></td>
      <td><a  href="editar.php?acao=editar&id=<?php echo $usuario['id']; ?>" class="btn btn-light">editar</a></td>
      <td><a href="acoes.php?acao=excluir&id=<?php echo $usuario['id']; ?>"class="btn btn-danger">excluir</a></td>
    </tr>
    <?php
         }
   ?>
  </tbody>
</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   </div>
 </html>
