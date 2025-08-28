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
        ?>
        <section class='desempenho_section' ><h1 class='section-text'>Desempenho dos Estudantes</h1>
        <p>Veja na tabela abaixo o desempenho dos estudantes da escola <?php echo $dados_escola['Nome'] ?></p></section>
        <div class='container'>
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Visualizar Desempenho</th>
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
                    <td><button type='button' data-bs-toggle='modal' data-bs-target='#<?php echo $dado['ID'] ?>' class='desempenho_button'>Desempenho</button>
                        <div class='modal fade' id='<?php echo $dado['ID'] ?>' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h1 class='modal-title fs-5' id='exampleModalLabel' style='font-size: 26px;'>Desempenho de <?php echo $dado['Nome'] ?></h1>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>X</button>
                                    </div>
                                    <div class='modal-body'>
                                        <?php
                                            $id = $dado['ID'];
                                            $sql_video = "SELECT * FROM desempenho WHERE ID = $id";
                                            $sql_query_video = $conn->query($sql_video) or die("Falha na execução do código SQL: " . $conn->error);
                                            if ($sql_query_video->num_rows == 0){
                                                $insert = "INSERT INTO desempenho (ID, Video1) VALUES ('$id', 0)";
                                                $conn->query($insert);
                                            }
                                            $resultado_video = mysqli_query($conn,$sql_video);
                                            $dados_video = mysqli_fetch_assoc($resultado_video);

                                            //Video1 - Piramides de Gizé
                                            if ($dados_video['Video1'] == 1){
                                                echo "Pirâmides de Gizé: ✅<br>";
                                            } else{
                                                echo "Pirâmides de Gizé: ❌<br>";
                                            }

                                            //Video2 - Uma Carta da Trincheira
                                            if ($dados_video['Video2'] == 1){
                                                echo "Uma Carta da Trincheira: ✅<br>";
                                            } else{
                                                echo "Uma Carta da Trincheira: ❌<br>";
                                            }

                                            //Video3 - Battle Road
                                            if ($dados_video['Video3'] == 1){
                                                echo "Battle Road: ✅<br>";
                                            } else{
                                                echo "Battle Road: ❌<br>";
                                            }

                                            //Video4 - Batalha de Waterloo
                                            if ($dados_video['Video4'] == 1){
                                                echo "Batalha de Waterloo: ✅<br>";
                                            } else{
                                                echo "Batalha de Waterloo: ❌<br>";
                                            }

                                            //Video5 - História da Aviação
                                            if ($dados_video['Video5'] == 1){
                                                echo "História da Aviação: ✅<br>";
                                            } else{
                                                echo "História da Aviação: ❌<br>";
                                            }

                                            //Video6 - Evento Tunguska
                                            if ($dados_video['Video6'] == 1){
                                                echo "Evento Tunguska: ✅<br>";
                                            } else{
                                                echo "Evento Tunguska: ❌<br>";
                                            }

                                            //Video7 - Laboratório de Radioquímica
                                            if ($dados_video['Video7'] == 1){
                                                echo "Laboratório de Radioquímica: ✅<br>";
                                            } else{
                                                echo "Laboratório de Radioquímica: ❌<br>";
                                            }

                                            //Video8 - Parque Nacional Subaquático
                                            if ($dados_video['Video8'] == 1){
                                                echo "Parque Nacional Subaquático: ✅<br>";
                                            } else{
                                                echo "Parque Nacional Subaquático: ❌<br>";
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
        <?php
            }
        ?>
    </main>
</body>
<script src="menu.js"></script>
</html>