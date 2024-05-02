<?php
class Dao {

private $dsn = "mysql:host=localhost;dbname=bancoG";
private $username = "root";
private$password = "";
private $pdo;

public function __construct(){
    $this->pdo = new PDO($this->dsn, $this->username, $this->password);
}

public function insertLogin($usuario,$senha){
    try {
        $stmt = $this->pdo->query("insert into login values (null,'$usuario','$senha')");
       } catch(PDOException $ex){
           echo "<pre>";
         echo $this->pdo->errorInfo()[2];
       }
}

public function listar(){
    $stmt = $this->pdo->query("SELECT * FROM login");
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $linha['usuario'] . " - " . $linha['senha'] . "<br>";
    }
}
}














