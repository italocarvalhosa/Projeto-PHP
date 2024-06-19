<?php

//Conexões
include "login.php";
include "cabecalho.php";
include "rodape.php";
include "conexao.php";




// Verificar se o ID da tarefa foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    // Receber o ID da tarefa
    $idTarefa = $_GET['id'];

    // Atualizar o status da tarefa para 'concluída' no banco de dados
    $sql = "UPDATE tarefas SET status = 'concluída' WHERE id = $idTarefa";
    
    if ($conn->query($sql) === TRUE) {
        // Você pode adicionar outras ações aqui, se necessário
    } else {
        echo "Erro ao marcar tarefa como concluída: " . $conn->error;
    }
}

// Consulta SQL para selecionar todas as tarefas
$sql = "SELECT * FROM tarefas";
$result = $conn->query($sql);
?>
