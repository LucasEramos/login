<?php
    require_once("conexão.php");
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    if (isset($_POST['nome']) && isset($_POST['senha'])){
        // inserção de dados
        $sql = "INSERT INTO usuario (nome, senha) VALUES ('$senha', '$senha')";
        if (mysqli_query($conn, $sql)){
            header ('Location: home.php');
            } else {
                     echo "Erro ao cadastrar: ";
            
            }
   }else{
       header('Location: home.php');
    exit();
    }
?>