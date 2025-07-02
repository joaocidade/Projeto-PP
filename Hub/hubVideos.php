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
        <p class='txt_sections'>↳ Vídeos</p>
        <div class="caixas">
            <div class="caixa">
                <a href="" target="_blank"><img src="" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="" alt="0"></a>
            </div>
            <div class="caixa">
                <a href="" target="_blank"><img src="" alt="0"></a>
            </div>
        </div>
    </section>
    </main>
</body>
<script src="menu.js"></script>
</html>