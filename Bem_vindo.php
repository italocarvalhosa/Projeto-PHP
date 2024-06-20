<?php

session_start();
if (!isset($_SESSION ['username'])){ /* verificar se a variável está definida.*/
    header("Location: login.php"); /* redireciona para a página login*/
    exit();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Bem vindo</title>
    </head>
    <body>
        <h1>Bem Vindo <?php echo $_SESSION['username']; ?></h1>/*imprimi uma mensagem da sessão*/ 
        <a href="logout.php">Sair</a> 
    </body>
</html>