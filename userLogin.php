<?php

include 'Dao.php';

$dao = new Dao(); // permite acessar a classe dao 
$dao -> userLogin($_POST['username'], $_POST['password'])
// e onde os dados são recebidos pelo usuários  e enviado via post 
// Verifica a autenticação do usuários com o banco de dados 
?> 

