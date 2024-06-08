<?php

include 'Dao.php';

$dao = new Dao();
$dao -> userLogin($_POST['username'], $_POST['password'])
?>