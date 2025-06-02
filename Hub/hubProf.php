<?php
include_once '../incluir/conexao.php';

//comando de SQL para executar
$sql = "SELECT * FROM alunos";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub do Professor</title>
    <link rel="stylesheet" href="styleHub1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="menulateral">
        <ul>
            <li class="itemmenu">
                <a href="#">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt">Inicio</span>
                </a>
            </li>
            <li class="itemmenu">
                <a href="#">
                    <span class="icon"><i class="bi bi-camera-reels"></i></span>
                    <span class="txt">Videos</span>
                </a>
            </li> 
            <li class="itemmenu">
                <a href="#">
                    <span class="icon"><i class="bi bi-mic"></i></span>
                    <span class="txt">Audio</span>
                </a>
            </li>
            <li class="itemmenu">
                <a href="#">
                    <span class="icon"><i class="bi bi-hand-index"></i></i></span>
                    <span class="txt">Libras</span>
                </a>
            </li>
            <li class="itemmenu">
                <a href="#">
                    <span class="icon"><i class="bi bi-badge-vr"></i></span>
                    <span class="txt">VR</span>
                </a>
            </li>
        </ul>
    </nav>

    <header>
        <h1> Olá! Seja bem-vindo(a) ao Hub, professor!</h1>
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
    <section id="audio">
        <p class="txt_sections">↳ Áudios</p>
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
    <section id="libras">
        <p class="txt_sections">↳ Líbras</p>
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
    <section id="libras">
        <p class="txt_sections">↳ Alunos</p>
        <div class="caixas">
            <?php 
                while ($dado = mysqli_fetch_assoc($resultado)){
            ?>
            <tbody>
                <ul>
                    <li><?php echo $dado['AlunoID'] ?> | <?php echo $dado['Nome'] ?></li>
                    </tr>
                </ul>
            </tbody>
            <?php 
                }
            ?>
        </div>
    </section>
    </main>
    
    <footer>
        <p>Os videoaulas não são de nossa autoria.</p>
        <p style="font-size: 25px; margin-top:10px;">Copyright © 2024-2025, development by RA: educação e tecnologia.</p>  
    </footer>     
</body>
<script src="menu.js"></script>
</html>