<?php
include_once '../incluir/conexao.php';

$sql = "SELECT * FROM alunos";

$resultado = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub do Professor</title>
    <link rel="stylesheet" href="hubStyle.css">
</head>
<body>
    <header>
        <h1> Olá! Seja bem-vindo(a) ao Hub, professor!</h1>
        <div class="txt_recursos">
            <p>Estes são os seus recursos:</p>
        </div>
    </header>
    <main>
    <section id="videos">
        <p class='txt'>↳ Vídeos</p>
        <div class="vds">
            <div class="caixa">
                <a href="" target="_blank"><img src="" alt="0"></a>
            </div>
        <div class="caixa">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
            </div>
            <div class="caixa">
                <a href="" target="_blank">
            <img src="" alt="0">
            </a>
            </div>
        </div>
    </section>
    <section id="audio">
        <div class="txt">
            <p>
                ↳ Áudios
            </p>
        </div>
    <div class="aud">
        <div class="caixa4">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
        </div>
    <div class="caixa5">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
        </div>
        <div class="caixa6">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
        </div>
    </div>
    </section>
        <section id="libras">
        <div class="txt3">
            <p>
                ↳ Líbras
            </p>
        </div>
    <div class="lib">
        <div class="caixa7">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
        </div>
    <div class="caixa8">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
        </div>
        <div class="caixa9">
    <a href="" target="_blank">
            <img src="" alt="0">
            </a>
        </div>
    </div>
    </section>
    <section id="libras">
        <div class="txt">
            <p>
                ↳ Alunos
            </p>
        </div>
    <div class="lib">
        <?php 
            while ($dado = mysqli_fetch_assoc($resultado)){
        ?>
        <tbody>
            <ul>
              <li><?php echo $dado['AlunoID'] ?> | <?php echo $dado['Nome'] ?></li>
            </tr>
          </tbody>
        <?php 
            }
        ?>
    </div>
    <br>
<br>
<br>
<br>
<br>
    </main>
    
    <footer>

        <p>
            Os videoaulas não são de nossa autoria.
        </p>
        <p style="font-size: 25px; margin-top:10px;">
            Copyright © 2024-2025, development by RA: educação e tecnologia.
        </p>
        
        </footer>    
        </div>
</body>
</html>