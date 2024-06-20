<?php
// Incluir o arquivo de conexão com o banco de dados
include 'conexao.php';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];


    // Inserir a nova tarefa no banco de dados
    $sql = "INSERT INTO tarefas (nome, descricao) VALUES ('$nome', '$descricao')";
    
    if ($conn->query($sql) === TRUE) {
        // Mensagem de sucesso
        echo "Nova tarefa adicionada com sucesso!";

        // Redirecionar para a página inicial após 2 segundos
        header("refresh:2; url=conteudo.php");
        exit;
    } else {
        echo "Erro ao adicionar nova tarefa: " . $conn->error;
    }
} else {
    // Se o formulário não foi submetido, redirecionar para a página inicial
    header("Location: conteudo.php");
    exit;
}
?>
