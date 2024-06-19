<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adicionar Nova Tarefa</title>
<meta charset="UTF-8">
<script>

  

</script>
<style>
  /* Exemplo de estilização personalizada */
  body {
    font-family: Arial, sans-serif;
  }
  #calendar {
    max-width: 700px;
    margin: 0 auto;
    padding: 25px;
  }
</style>

</script>
<body>


<h1>Adicionar Nova Tarefa</h1>
 
    <form action="processar_tarefas.php" method="post">
        <label for="nome">Nome da Tarefa:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao"></textarea><br>
      

        <input type="submit" value="Adicionar Tarefa">       
</form>

<a href="conteudo.php">Voltar para a Lista de Tarefas</a>

</html>