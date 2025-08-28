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
    <section id="videos">
          <h1 class='classes'>↳ Vídeos de história</h1>
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
    <section id="videos2">
        <div class="caixas">
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto4/index.php" target="_blank"><img id="img1" src="../Imagens/battlewaterloo.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="../ProjetosWebXR/Projeto5/index.php" target="_blank"><img src="../Imagens/historyofflight.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="" alt="0"></a>
            </div>
        </div>
    </section>
    <section id="videos3">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
        <h1 class='classes'>Ciências</h1>
>>>>>>> Stashed changes
=======
        <h1 class='classes'>Ciências</h1>
>>>>>>> Stashed changes
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/asteroid.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/nationalpark.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/interbody.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos4">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        <h1 class='classes'>↳ Vídeos de biologia</h1>
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
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
    <section id="videos5">
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/departmentofchemistryandbioscience.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/radiochemistry.png" alt=""></a>
            </div>
            <div class="caixa">
<<<<<<< Updated upstream
<<<<<<< Updated upstream
                <a href="https://www.youtube.com/watch?v=rmgf0VDDlH8&ab_channel=PlantEnergyBiology" target="_blank"><img src="../Imagens/cellexploringvideo.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos7">
        <h1 class='classes'>↳ Vídeos de química</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=Xi1aDyVrnDg&ab_channel=AalborgUniversitet" target="_blank"><img src="../Imagens/departmentofchemistryandbioscience.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=z9Jm5zR3iSk&ab_channel=UniversityofHelsinki" target="_blank"><img src="../Imagens/radiochemistry.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=RNbNXUh3PH0&ab_channel=UBCOkanaganARCampusTOUR" target="_blank"><img src="../Imagens/chemistry360video.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos8">
        <div class="caixas">
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=xsgS3yOBveY&t=2s&ab_channel=UniversityofBath" target="_blank"><img src="../Imagens/tourchemistrylab.png" alt=""></a>
            </div>
            
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=FzGZnZBs_dg&ab_channel=TheUniversityofTulsa" target="_blank"><img src="../Imagens/organicchemistry.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=27yeAXVtlDA&ab_channel=AmandaSimson" target="_blank"><img src="../Imagens/chemicalengineering.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos9">
        <h1 class='classes'>↳ Vídeos de artes</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=V3_XQH0Dy6I&t=20s&ab_channel=6abcPhiladelphi" target="_blank"> <img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=U4BoLPZ4qbI&ab_channel=JamesMadisonUniversity" target="_blank"> <img src="../Imagens/jmusschoolofart.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=VB_2m2bwrik&t=15s&ab_channel=BryneStothard" target="_blank"> <img src="../Imagens/vrartclass.png" alt=""></a>
            </div>
        </div>
    </section>

    <section id="videos10">
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
=======
                <a href="" target="_blank"><img src="../Imagens/chemistrylab.png" alt=""></a>
>>>>>>> Stashed changes
=======
                <a href="" target="_blank"><img src="../Imagens/chemistrylab.png" alt=""></a>
>>>>>>> Stashed changes
            </div>
        </div>
    </section>
    </main>
</body>
<script src="menu.js"></script>
</html>