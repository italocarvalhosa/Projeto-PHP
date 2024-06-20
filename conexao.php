
<?php

$servername = "localhost";

$username = "root"; //  MySQL

$password = ""; //   

$dbname = "BancoG"; //  Nome do seu banco de dados
 
// Criar conexão  e acessa os dados 

$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar conexão e se der erro o script é fechado 

if ($conn->connect_error) {

    die("Conexão falhou: " . $conn->connect_error);

}
?>







