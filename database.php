<?php
class Database {
    private $host = "192.168.8.10";
    private $username = "grupophp03"; // Substitua pelo nome do usuário do seu banco de dados
    private $password = "php03"; // Substitua pela senha do seu banco de dados
    private $database = "grupo03php"; // Substitua pelo nome do seu banco de dados
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }
    }
}
?>


























































































