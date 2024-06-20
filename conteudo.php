
<?php
require_once 'Dao.php';
$dao = new Dao();
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
        $dados = $dao->mostrarTarefasPendentes();
        while ($linha = $dados->fetch()) {
    ?>

<a href="concluirTarefa.php?id_tarefa=<?php echo $linha['id'] ?>" title="<?php echo $linha['descricao'] ?>"><?php echo $linha['nome'] ?></a><br>

    <?php
        }
    ?>

    </ul>

    <h2>Tarefas Concluídas</h2>
    <ul>

    <?php
        $dados = $dao->mostrarTarefasConcluida();
        while ($linha = $dados->fetch()) {
    ?>

<a title="<?php echo $linha['descricao'] ?>"><?php echo $linha['nome'] ?></a><br>

    <?php
        }
    ?>

    </ul>

    <a href="adicionar_tarefas.php">Adicionar Nova Tarefa</a>
</body>
</html>
