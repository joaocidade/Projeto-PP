<?php
include_once '../Incluir/conexao.php';
include_once '../Incluir/protect.php';

$id_escola = $_SESSION['id_escola'] ?? 0;

//comando de SQL para executar
$sql = "SELECT * FROM alunos WHERE EscolaID = '$id_escola'";
$sql_escola = "SELECT * FROM escolas WHERE EscolaID = '$id_escola'";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);
$resultado_escola = mysqli_query($conn,$sql_escola);

$dados_escola = mysqli_fetch_assoc($resultado_escola);
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
            <h1>Bem-vindo(a) ao Ambiente de Aprendizagem Digital Imersy!</h1>
            <p>É com grande entusiasmo que abrimos as portas desta plataforma educacional online e imersiva para todos os estudantes. Aqui, vocês terão acesso a uma variedade de ambientes de aprendizagem projetados para impulsionar seu aprendizado das principais matérias abordadas desde o Ensino Fundamental ao Ensino Médio. <br><br> Nossa plataforma é projetada para ser inclusiva, intuitiva e fácil de usar, permitindo que vocês naveguem pelos ambientes virtuais e encontrem os conteúdos de que precisam com facilidade. <br><br> Sejam bem-vindo(a) ao Ambiente de Aprendizagem Digital Imersy, onde o futuro da educação começa!</p>
        </div>

        <?php
        if($_SESSION['cargo'] == "alunos" || $_SESSION['cargo'] == "autodidatas"){
           
        } else{
            echo "<h1 class='section-text'>Desempenho dos Estudantes</h1>
            <p>Veja na tabela abaixo o desempenho dos estudantes da escola" . $dados_escola['Nome'] . "</p>
            <div class='container'>
            <table>
            <thead>
                <tr>
                <th>AlunoID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>EscolaID</th>
                </tr>
            </thead>";

            while ($dado = mysqli_fetch_assoc($resultado)){
                echo "<tbody>
                    <tr>
                    <td>" . $dado['ID'] . "</td>
                    <td>" . $dado['Nome'] . "</td>
                    <td>" . $dado['Email'] . "</td>
                    <td>" . $dado['EscolaID'] . "</td>
                    </tr>
                </tbody>";
            }
        echo "</table></div>";
        }
        ?>
    </main>
</body>
<script src="menu.js"></script>
</html>