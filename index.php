<?php

//Conexões
include "login.php";
include "cabecalho.php";
include "conteudo.php";
include "rodape.php";
include "conexao.php";



//include "adicionar_tarefas.php";


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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>

    <h2>Tarefas Pendentes</h2>
    <ul>
        <?php
        // Loop através de todas as tarefas e exibi-las
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row['status'] === 'pendente') {
                    echo "<li>" . $row["nome"] . " - " . $row["descricao"] . " <form action='index.php?id=" . $row['id'] . "' method='POST'><button type='submit' name='concluir'>Concluir</button></form></li>";
                }
            }
        } else {
            echo "<li>Nenhuma tarefa pendente encontrada</li>";
        }
        ?>
    </ul>

    <h2>Tarefas Concluídas</h2>
    <ul>
        <?php
        // Voltar para o início do resultado para listar as tarefas concluídas
        $result->data_seek(0);
        // Loop através de todas as tarefas e exibi-las
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row['status'] === 'concluída') {
                    echo "<li>" . $row["nome"] . " - " . $row["descricao"] . "</li>";
                }
            }
        } else {
            echo "<li>Nenhuma tarefa concluída encontrada</li>";
        }
        ?>
    </ul>

    <a href="adicionar_tarefas.php">Adicionar Nova Tarefa</a>
</body>
</html>