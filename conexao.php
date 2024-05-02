
<?php

$servername = "localhost";

$username = "root"; // Nome de usuário do MySQL

$password = ""; //  Sua senha do MySQL

$dbname = "bancoG"; //  Nome do seu banco de dados
 
// Criar conexão

$conn = new mysqli($servername, $username, $password, $dbname);
 
// Verificar conexão

if ($conn->connect_error) {

    die("Conexão falhou: " . $conn->connect_error);

}
?>







