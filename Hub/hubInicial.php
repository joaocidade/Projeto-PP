<?php
include_once '../Incluir/conexao.php';

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
        <h1> Olá! Seja bem-vindo(a) ao Hub, professor!</h1>
    </header>

    <main>
        <div class="container">
            <h1>Lista de Alunos</h1>
            <table>
            <thead>
                <tr>
                <th>AlunoID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>EscolaID</th>
                </tr>
            </thead>
            <?php
                while ($dado = mysqli_fetch_assoc($resultado)){
            ?>
            <tbody>
                <tr>
                <td><?php echo $dado['AlunoID'] ?></td>
                <td><?php echo $dado['Nome'] ?></td>
                <td><?php echo $dado['Email'] ?></td>
                <td><?php echo $dado['Senha'] ?></td>
                <td><?php echo $dado['EscolaID'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
            </table>
        </div> 
    </main>
</body>
<script src="menu.js"></script>
</html>