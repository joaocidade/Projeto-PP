<?php

include_once('conexao.php');

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $resultado = mysqli_query($conn, "INSERT INTO alunos(nome,email,senha)
    VALUES ($nome,$email,$senha)")
}

?>