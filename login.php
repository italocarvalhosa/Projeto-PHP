<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .button-container input[type="submit"] {
            width: 48%; /* Ajustando a largura para caber dois botões lado a lado */
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }


        a {
            margin-top: 5px; /* Espaçamento acima do link */
            display: inline-block; /* Torna o link um bloco para aplicar margens */
            width: 48%; /* Ajustando a largura para caber dois botões lado a lado */
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Tela de Login</title>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="userLogin.php" method="post">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <div class="button-container">
            <input type="submit" value="Entrar">
           <a class="button-container" href="cadastro.php">Cadastrar </a>
        </div>
    </form>
</div>

</body>
</html>
