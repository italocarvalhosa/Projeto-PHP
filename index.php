<?php

//Conexões
include "login.php";
include "cabecalho.php";
include "rodape.php";
include "conexao.php";




// Verificar se o ID da tarefa foi enviado e o código é executado quando houver um post
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    // Receber o ID da tarefa
    $idTarefa = $_GET['id'];

    // Atualizar o status da tarefa para 'concluída' no banco de dados
    $sql = "UPDATE tarefas SET status = 'concluída' WHERE id = $idTarefa";


    // o código é executado e retorna true caso aconteça um erro com a consulta a conexão e fechada 
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Erro ao marcar tarefa como concluída: " . $conn->error;
    }
}

// seleciona a tabela e armazena os resultados para uma impressão 
$sql = "SELECT * FROM tarefas";
$result = $conn->query($sql);
?>
