<?php

include "Dao.php";

    $usuario = $_POST['username'];
    $senha = $_POST['password'];
    $confirm_senha = $_POST['confirm_password'];

    if($confirm_senha == $senha){
        $dao = new Dao();
        $dao->insertLogin($usuario, $senha);
    } else{
        header("Location: cadastro.php?erro=1");
    }


?>