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

    <script>
        function reconhecerFala() {
      const reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
      reconhecimento.lang = 'pt-BR';
      reconhecimento.interimResults = false;
      reconhecimento.maxAlternatives = 1;
 
      reconhecimento.onstart = () => {
        document.getElementById("resultado").textContent = "Ouvindo...";
      };
 
      reconhecimento.onresult = (event) => {
        const texto = event.results[0][0].transcript;
        document.getElementById("resultado").textContent = "Você disse: " + texto;
      };
 
      reconhecimento.onerror = (event) => {
        document.getElementById("resultado").textContent = "Erro: " + event.error;
      };
 
      reconhecimento.start();
    } 
    function pararReconhecimento(){
        const reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        reconhecimento.stop(reconhecerFala());
    }
    function transcricao(){
    const texto = () => document.getElementById("resultado").value;
    const fala = new SpeechSynthesisUtterance(texto());
    fala.lang = 'pt-BR';    
    fala.rate = 1;           
    fala.pitch = 1;         
    fala.volume = 1;        
    speechSynthesis.speak(fala);
        
    } 
    
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