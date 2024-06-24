<?php

include "Dao.php";

    /* recebendo dados do formulario*/
    $usuario = $_POST['username'];
    $senha = $_POST['password'];
    $confirm_senha = $_POST['confirm_password'];

    if($confirm_senha == $senha){
        $dao = new Dao();
        $dao->insertLogin($usuario, $senha); 
        /* chamo o insertLogin do dao e passo dois parametros, se nao for coincidente os campos, ele retorna
        para cadastro*/
    } else{
        header("Location: cadastro.php?erro=1");
    }


?>