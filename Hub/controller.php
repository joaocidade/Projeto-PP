<?php
include_once '../Incluir/conexao.php';
include_once '../Incluir/protect.php';

//comando de SQL para executar
$sql = "SELECT * FROM alunos";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);

$atulizador = date('YmdHis').rand(0,99999999999);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hub do Professor</title>

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styleHub.css?t=<?php echo $atulizador;?>"> 
    <link rel="shortcut icon" href="../Imagens/Logo.png">
    <script src="funcoes.js?t=<?php echo $atulizador;?>"></script>
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
                    <span class="icon"><i class="bi bi-hand-index"></i></span>
                    <span class="txt">Libras</span>
                </a>
            </li>
            <li class="itemmenu">
                <a onclick="carregar('hubVR.php')">
                    <span class="icon"><i class="bi bi-badge-vr"></i></span>
                    <span class="txt">VR</span>
                </a>
            </li>
            <li class="itemmenu logout">
                <a href="../Incluir/logout.php">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt">Sair</span>
                </a>
            </li>
        </ul>
    </nav>


    <div id='conteudo'>Carregando...</div> 

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
    <footer>
      <div class="td">
        <div class="logo">
          <img src="../Imagens/Logo.png" alt="">
        </div>
        <div class="caixas">
          <div class="AboutUs">
            <h5>Institucional</h5>
            <p><a href="parceria.html">Sobre nós</a></p>
            <p><a href="projetos.html">Contato</a></p>
            <p><a href="termos.html">Perguntas frequentes</a></p>
          </div>
          <div class="More">
            <h5>Legal</h5>
            <p><a href="quemsomos.html">Termos de Uso</a></p>
            <p><a href="ferramentas.html">Política de Privacidade</a></p>
          </div>
        </div>
      </div>

      <div class="final">
        <hr>
        <h6>Projeto Estudantil - Livre para fins educacionais.</h6>
      </div>
    </footer>


</body>
<script src="menu.js"></script>
</html>