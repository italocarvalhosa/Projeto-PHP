<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adicionar Nova Tarefa</title>

<style>
  /* Exemplo de estilização personalizada */
  body {
    font-family: Arial, sans-serif;
    text-align: center;

   
  }
</style>

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