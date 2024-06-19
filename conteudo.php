
<?php
require_once 'Dao.php';
$dao = new Dao();
$resultado = $dao->result;

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
        if ($resultado !== null) {
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                if ($row['status'] === 'pendente') {
                    echo "<li>" . $row["nome"] . " - " . $row["descricao"] 
                
                    ?>
                     <form action='.php'
                      <?php echo $row ['id'] ?>
                       method='POST'>
                      <button type='submit' name='concluir'>Concluir</button>;
                      <?php
                }
            }
        } else {
            echo "<li>Nenhuma tarefa pendente encontrada</li>";
        }
    }
        ?>
    </ul>

    <h2>Tarefas Concluídas</h2>
    <ul>
        <?php
        // Voltar para o início do resultado para listar as tarefas concluídas
        if ($resultado !== null) {
        $resultado->data_seek(0);
        // Loop através de todas as tarefas e exibi-las

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                if ($row['status'] === 'concluída') {
                    echo "<li>" . $row["nome"] . " - " . $row["descricao"] . "</li>";
                }
            }
        } else {
            echo "<li>Nenhuma tarefa concluída encontrada</li>";
        }
    }
        ?>
    </ul>

    <a href="adicionar_tarefas.php">Adicionar Nova Tarefa</a>
</body>
</html>
