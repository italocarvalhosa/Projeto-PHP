<?php
require_once 'Dao.php';
$id = $_GET['id_tarefa']; /* metodo superglobal para coleta de dados,
 alem de ser um array associativo para passar dados via url entre paginas web e script php*/

/* instacia o dao e chama o metodo e o id como parametro*/
$dao = new Dao();
$dao ->concluirTarefa($id);
header ("Location: conteudo.php");
