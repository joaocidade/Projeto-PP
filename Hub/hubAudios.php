<?php
include_once '../incluir/conexao.php';

// Comando SQL para executar
$sql = "SELECT * FROM alunos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hub do Professor</title>
  <link rel="stylesheet" href="styleHub.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <script src="funcoes.js"></script>
  <header>
    <div class="txt_recursos">
      <p>Estes são os seus recursos:</p>
    </div>
  </header>

  <main>
    <div id="apresentacao">
      <h1>Bem-vindo ao Hub de Funcionalidades</h1>

      <div id="apresentacao_transcricao">
        <h2>Transcrição de Texto</h2>
        <p>Uma funcionalidade focada na transcrição de voz para texto em tempo real, auxiliando pessoas surdas a compreenderem conversas sem precisar utilizar Libras.</p>
        <button onclick="reconhecerFala()">Iniciar Transcrição</button>
        <div id="resultado"></div>
      </div>

      <div id="apresentacao_texto_voz">
        <h2>Texto para Voz</h2>
        <p>Essa funcionalidade auxilia pessoas com deficiência na fala a se comunicarem por meio do computador.</p>
        <textarea id="entradaTexto" rows="4" cols="50" placeholder="Digite aqui o texto a ser falado..."></textarea>
        <br />
        <button onclick="transcricao()">Ouvir Texto</button>
      </div>
    </div>
  </main>

  <script src="funcoes.js"></script>
  <script src="menu.js"></script>
</body>
</html>
