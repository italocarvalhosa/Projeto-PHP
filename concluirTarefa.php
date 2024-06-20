<?php
require_once 'Dao.php';
$id = $_GET['id_tarefa'];

/* instacia o dao e chama o metodo */
$dao = new Dao();
$dao ->concluirTarefa($id);
header ("Location: conteudo.php");
