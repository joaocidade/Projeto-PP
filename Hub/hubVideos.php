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
        <h1 class='classes'>História</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="../ProjetosWebXR/index.php" target="_blank"><img id="img1" src="../Imagens/All_Gizah_Pyramids.jpg" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/0khdjCUIR1g?si=Wh_W06mwF5FVimOU" target="_blank"><img src="../Imagens/economyegypt.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/_JttvM52Rno?si=3jQInBMRifv5VQB9" target="_blank"><img src="../Imagens/exploringegypt.png" alt="0"></a>
            </div>
        </div>
    </section>
    <section id="videos2">
        <h1 class='classes'>↳ Vídeos de história</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="https://youtu.be/m7h4XuvLrmg?si=Qpp-jgdLglSJ4Hmk" target="_blank"><img id="img1" src="../Imagens/trinchesletter.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/1TqvPNh18ms?si=-IHD_XkcB5b5tYp6" target="_blank"><img src="../Imagens/battleroad.png" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/Bj1aVW3LuVo?si=EeEY2PA939ZrQW7i" target="_blank"><img src="../Imagens/battlewaterloo.png" alt="0"></a>
            </div>
        </div>
    </section>
    <section id="videos3">
        <h1 class='classes'>↳ Vídeos de história</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="https://youtu.be/G_5r6HCW_DE?si=INJl0WiSZSCQ5hTa" target="_blank"><img src="../Imagens/texashistory.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/JKm3uzL_A4c?si=XdMOqW4df6oR5rLU" target="_blank"><img src="../Imagens/asteroid.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/fojmorJISL0?si=n-oRkYlmKTm3C0EF" target="_blank"><img src="../Imagens/historyofflight.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos4">
        <h1 class='classes'>↳ Vídeos de história</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="https://youtu.be/v64KOxKVLVg?si=foPVGI2QYP-RJCpb" target="_blank"><img src="../Imagens/nationalpark.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/aogLFedcnTI?si=S2EUr3-kqOXHN_au" target="_blank"><img src="../Imagens/interbody.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/r8-6Z1Efgzg?si=nrXpv-HAm4jgIbPF" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos5">
        <h1 class='classes'>↳ Vídeos de história</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="https://youtu.be/kw9EJbezlK4?si=gPz01_TdLRdqy76v" target="_blank"><img src="../Imagens/wthappinsiyrbody.png" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://youtu.be/rmgf0VDDlH8?si=Ba2frVj7Xo0X7yte" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="https://www.youtube.com/watch?v=rmgf0VDDlH8&ab_channel=PlantEnergyBiology" target="_blank"><img src="../Imagens/cellexploringvideo.png" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos6">
        <h1 class='classes'>↳ Vídeos de história</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
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
                <a href="https://www.youtube.com/watch?v=RNbNXUh3PH0&ab_channel=UBCOkanaganARCampusTOUR" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
        </div>
    </section>
    <section id="videos8">
        <h1 class='classes'>↳ Vídeos de química</h1>
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
        <h1 class='classes'>↳ Vídeos de artes</h1>
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="../Imagens/" alt=""></a>
            </div>
        </div>
    </section>
    </main>
</body>
<script src="menu.js"></script>
</html>