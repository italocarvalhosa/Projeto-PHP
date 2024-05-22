<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BancoG";


//Conexão
$conn = new mysqli($servername,$username,$password,$dbname);

//Verificação
if($conn-> connect_error){
    die("Conexão falhou;". $conn->connect_error);}
    

// Dados
$user = $_Post ['nome'];
$email = $_post ['email'];
$password = $_Post ['password'];

//Validação
if (empty($user)|| empty ($email)|| empty($password)) {
    die ("Todos os campos são obrigatórios.");
}

// Verificar no banco de dados
$sql = "SELECT if FROM users Where username = ? OR email =?";

$stmt = $conn ->prepare ($sql);
$stmt -> bind_param ("ss", $user, $email);
$stmt -> execute();
$stmt -> store_result();

if ($stmt -> num_rows> 0){
    die("Nome do usuario / email ja esta sendo usado");
}
$stmt -> close();

//Senha
$hashed_password =password_hash($password, $Password_default);

//Iserção
$sql = "Insert INTO users (username, email, password) values (?,?,?)";
$stmt = $conn ->prepare($sql);
$stmt ->bind_param("sss", $user, $email, $hashed_password);

if ($stmt ->execute()) {
    echo "Cadastro realizado";
} else{
    echo "Erro" . $stmt->error;
}

$stmt->close();
$conn->close();
?>





























































































