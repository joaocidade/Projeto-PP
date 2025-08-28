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
        <h1>Ambientes de Aprendizado 360°</h1>
    </header>
   <main id="mainVideos">
    <section>
          <h1 class='classes'>História</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto1/index.php" target="_blank"><img id="img1" src="../Imagens/All_Gizah_Pyramids.jpg" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto2/index.php" target="_blank"><img src="../Imagens/trinchesletter.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto3/index.php" target="_blank"><img src="../Imagens/battleroad.png" alt="0"></a>
            </div>
        </div>
    </section>
    <section>
        <div class="caixas">
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto4/index.php" target="_blank"><img id="img1" src="../Imagens/battlewaterloo.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto5/index.php" target="_blank"><img src="../Imagens/historyofflight.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto6/index.php" target="_blank"><img src="../Imagens/asteroid.png" alt="0"></a>
            </div>
        </div>
    </section>
    <section>
        <h1 class='classes'>Ciências</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto7/index.php" target="_blank"><img src="../Imagens/departmentofchemistryandbioscience.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto8/index.php" target="_blank"><img src="../Imagens/nationalpark.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/interbody.png" alt=""></a>
            </div>
        </div>
    </section>
    <section>
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/HumanDigestivesys.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/wthappinsiyrbody.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/cellexploringvideo.png" alt=""></a>
            </div>
        </div>
    </section>
    </main>
</body>
<script src="menu.js"></script>
</html>