<?php
include_once '../Incluir/conexao.php';
include_once '../Incluir/protect.php';

$id_escola = $_SESSION['id_escola'] ?? 0;

//comando de SQL para executar
$sql = "SELECT * FROM alunos WHERE EscolaID = '$id_escola'";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head></head>

<body>
    <header>
        <h1> Olá! Seja bem-vindo(a) ao Hub, <?php echo $_SESSION['nome'];?>!</h1>
    </header>

    <main>
        <div class='bem-vindos'>
            <img src="../Imagens/Bem-vindos.png" alt="">
            <h1>Bem-vindos ao Ambiente de Aprendizagem Digital Imersy!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, soluta! Saepe, ratione accusantium. Nesciunt deleniti sapiente dicta dolorem illum veritatis ullam, nisi totam hic qui id eveniet culpa similique earum.</p>
        </div>

        <div class="container">
            <h1>Lista de Alunos</h1>
            <table>
            <thead>
                <tr>
                <th>AlunoID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>EscolaID</th>
                </tr>
            </thead>
            <?php
                while ($dado = mysqli_fetch_assoc($resultado)){
            ?>
            <tbody>
                <tr>
                <td><?php echo $dado['ID'] ?></td>
                <td><?php echo $dado['Nome'] ?></td>
                <td><?php echo $dado['Email'] ?></td>
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