<?php
include_once '../Incluir/conexao.php';

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
    <link rel="stylesheet" href="styleFuncionalidaes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="funçoes.js"></script>
</head>

<body>
    <nav class="menulateral">
        <ul>
            <li class="itemmenu">
                <a onclick="carregar('hubInicial.php')">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt">Inicio</span>
                </a>
            </li>
            <li class="itemmenu">
                <a onclick="carregar('hubVideos.php')">
                    <span class="icon"><i class="bi bi-camera-reels"></i></span>
                    <span class="txt">Videos</span>
                </a>
            </li> 
            <li class="itemmenu">
                <a onclick="carregar('hubAudios.php')">
                    <span class="icon"><i class="bi bi-mic"></i></span>
                    <span class="txt">Audio</span>
                </a>
            </li>
            <li class="itemmenu">
                <a onclick="carregar('hubLibras.php')">
                    <span class="icon"><i class="bi bi-hand-index"></i></i></span>
                    <span class="txt">Libras</span>
                </a>
            </li>
            <li class="itemmenu">
                <a onclick="carregar('hubVR.php')">
                    <span class="icon"><i class="bi bi-badge-vr"></i></span>
                    <span class="txt">VR</span>
                </a>
            </li>
        </ul>
    </nav>

    <div id='conteudo'>Carregando...</div>
    
    <div id="apresentacao">
        <h1>Bem vindo ao HUb de Funcionalidades</h1>
        <div id="aprensentacao_transcricao">
            <h2>Transcrição de Texto</h2>
            <p>Uma funcionalidade focada na trnascrição de voz para texto em tempo real, auxiliando pessoas surdas a comprenderem conversas sem precissar utilizar as libras</p>
            <button type="button">Ver a funcionalidade</button>
        </div>
        <div id="aprensentacao_texto-voz">
            <h1>Texto-Voz</h1>
            <p>Essa é uma funcionalidade que auxilia pessoas mudas a conseguir se comunicar com outros apartir do computador.</p>
            <button type="button">Ver a funcionalidade</button>
        </div>
    </div>

    <script>
        function carregar(pagina) {
        fetch(pagina)
            .then(response => {
            if (!response.ok) throw new Error('Erro ao carregar a página');
            return response.text();
            })
            .then(html => {
            document.getElementById('conteudo').innerHTML = html;
            })
            .catch(error => {
            document.getElementById('conteudo').innerHTML = '<p>Erro ao carregar o conteúdo.</p>';
            console.error(error);
            });
        }

        // Carrega a home ao abrir o site
        carregar('hubInicial.php');
    </script>

</body>
<script src="menu.js"></script>
</html>