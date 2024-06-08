<?php
class Dao {

private $dsn = "mysql:host=192.168.8.10;dbname=grupo03php";
private $username = "grupophp03";
private$password = "php03";
private $pdo;
public $result ;

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

public function userLogin($username, $password) {
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $this->pdo->query($sql);
    if ($result->fetch()) {
        echo "Login bem-sucedido!";
        header("Location: conteudo.php");
    } else {
        echo "Usuário ou senha inválidos!";
    }
}
}














