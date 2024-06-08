<?php

session_start();
if (!isset($_SESSION ['username'])){
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Bem vindo</title>
    </head>
    <body>
        <h1>Bem Vindo <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php">Sair</a>
    </body>
</html>