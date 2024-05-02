<?php
// Verificar se os campos de nome de usuário e senha estão definidos e não vazios
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verificar se a senha e a confirmação da senha correspondem
    if($password !== $confirm_password) {
        echo "As senhas não correspondem.";
    } else {
        // Processo de registro - este é um exemplo básico, você pode adicionar verificação de duplicatas, etc.
        // Aqui você pode salvar os detalhes do usuário em um banco de dados, por exemplo.
        echo "Registro bem-sucedido para o usuário: " . $username;
    }
}
?>
