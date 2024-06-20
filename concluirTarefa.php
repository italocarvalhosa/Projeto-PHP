<?php
require_once 'Dao.php';
$id = $_GET['id_tarefa'];

$dao = new Dao();
$dao ->concluirTarefa($id);
header ("Location: conteudo.php");
