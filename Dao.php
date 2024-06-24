<?php
class Dao {

private $dsn = "mysql:host=localhost;dbname=BancoG";
private $username = "root";
private$password = "";
private $pdo; /* guardará um objeto */


    public function __construct(){
    $this->pdo = new PDO($this->dsn, $this->username, $this->password);
    }  /* e um método construtor que instância a criação a classe e possibilita que um objeto seja criado */

    public function insertLogin($usuario,$senha){
    try {
        $stmt = $this->pdo->query("insert into login (username, password) values ('$usuario','$senha');");
        header("Location: index.php");
       } catch(PDOException $ex){
           echo "<pre>";
         echo $this->pdo->errorInfo()[2];
       }
    } /* a  função faz com que seja inserido dados no banco de dados
     usando os parâmetros usuario e senha,
      tendo a consulta e se houver exceção uma mensagem de erro e mostrada  */

    public function listar(){
    $stmt = $this->pdo->query("SELECT * FROM login");
    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {  /* O fetch retorna um array associativo de cada linha de resultado */
    echo $linha['usuario'] . " - " . $linha['senha'] . "<br>";
    } /* esse método percorre no banco de dados como um array e mostra todos os registros já feito no banco de dados pelo fetch e os mostra antes de cada login */
    }

    public function userLogin($username, $password) {
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = $this->pdo->query($sql);
    if ($result->fetch()) {
        echo "Login bem-sucedido!";
        header("Location: conteudo.php");
    } else {
        echo "Usuário ou senha inválidos!";
    } /* a função userLogin faz a verificação do usuário e a senha no banco,  caso tenha veracidade a tela e direcionada para o conteúdo principal, se não o login é inválido */
    }

    public function mostrarTarefasPendentes()
    {
        return $this->pdo->query("select * from tarefas where status = 'pendente'");
    }

    public function concluirTarefa($id)
    {
        return $this->pdo->query("update tarefas set status = 'concluida' where id=$id");
    }

    public function mostrarTarefasConcluida()
    {
        return $this->pdo->query("select * from tarefas where status = 'concluida'");
    }
}














