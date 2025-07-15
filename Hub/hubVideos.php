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
        <div class="txt_recursos">
            <p>Estes são os seus recursos:</p>
        </div>
    </header>
    <main>
    <section id="videos">
        <p class='txt_sections'>↳ Vídeos de história</p>
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
    <section id="videos8">
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
    <section id="videos9">
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
            </div>
        </div>
    </section>
    </main>
</body>
<script src="menu.js"></script>
</html>