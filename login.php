<?php
include 'Database.php';


/*class Login extends Database {
    public function userLogin($username, $password) {
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 1) {
            echo "Login bem-sucedido!";
        } else {
            echo "Usuário ou senha inválidos!";
        }
    }
}

// Verifica se o formulário de login foi enviado
if(isset($_POST['password'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cria um objeto da classe Login
    $login = new Login();

    // Chama o método de login
    $login->userLogin($username, $password);
}
}*/
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="userLogin.php" method="post">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

