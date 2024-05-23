


<?php

session_start();
include ('$dbname');

if ($S_SERVER["request-method"] == "POST"){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['senha']);


    $sql ="Select id, password FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result ->num_rows > 0) {
        $row = $result -> fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $_SESSION['username']= $username;
            header("location: Bem Vindo.php");
        } else {
            $error = "Sua senha esta incorreta";
        }
    } else {
        $error = "Usuario nao encontrado";
    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div>
            <label for="username">Nome:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">senha:</label>
            <input type="password" id="senha" name="insera sua senha" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <?php if (isset($error)){ "<p style = 'color:red; '>$error</p>";} ?>
    </form>
    
</body>
</html>
