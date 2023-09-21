<?php
session_star();

// Remover a variavel de sessão 'usuario'
unset($_SESSION['usuario']);

// Destruir a sessão
session_destroy();

//Redirecionar para o index
header('Location: index.php');
exit();
?>