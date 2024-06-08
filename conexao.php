
<?php

$servername = "192.168.8.10";

$username = "grupophp03"; // Nome de usuário do MySQL

$password = "php03"; //  Sua senha do MySQL

$dbname = "grupo03php"; //  Nome do seu banco de dados
 
// Criar conexão

$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar conexão

if ($conn->connect_error) {

    die("Conexão falhou: " . $conn->connect_error);

}
?>







