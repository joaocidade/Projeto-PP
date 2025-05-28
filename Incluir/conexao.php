<?php
// dados do servidor de banco de dados
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "hub_db";

// objeto que controla a conexao com o banco
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexao
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
// mensagem que deu certo a conexao - pode ser apagada depois que 
// exibir a mensagem, pois voce conseguiu conectar ao banco

?>