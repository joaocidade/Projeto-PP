<?php
include_once '../incluir/conexao.php';

//comando de SQL para executar
$sql = "SELECT * FROM alunos";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head></head>

<body>
    <header>
        <h1>Aplicação VR</h1>
    </header>

    <main>

    </main>
</body>
<script src="menu.js"></script>
</html>