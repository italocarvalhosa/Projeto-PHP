
<?php

$servername = "192.168.8.10"; /* SSH

$username = "grupophp03"; //  MySQL

$password = "php03"; //   

$dbname = "grupo03php"; //  Nome do seu banco de dados
 
// Criar conexão  e acessa os dados 

$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar conexão e se der erro o script é fechado 

if ($conn->connect_error) {

    die("Conexão falhou: " . $conn->connect_error);

}
?>







