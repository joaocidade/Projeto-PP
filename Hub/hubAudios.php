<?php
include_once '../Incluir/conexao.php';

// Comando SQL para executar
$sql = "SELECT * FROM alunos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>  
</head>

<body id="">
  <header>
    <h1>Recursos de Áudio</h1>
  </header>

  <main id="mainAudio">
    <div id="apresentacoes">
      <div class="apresentacao"> 
        <h2>Voz para Texto</h2>
        <p>Uma funcionalidade focada na transcrição de voz para texto em tempo real, auxiliando pessoas surdas a compreenderem conversas sem precisar utilizar Libras.</p>
        <button onclick="reconhecerFala()">Iniciar Transcrição</button>
        <button onclick="pararReconhecimento()">Parar Transcrição</button>
        <div id="resultado"></div>
      </div>

      <div class="apresentacao">
        <h2>Texto para Voz</h2>
        <p>Essa funcionalidade auxilia pessoas com deficiência na fala a se comunicarem por meio do computador.</p>
        <textarea id="entradaTexto" placeholder="Digite aqui o texto a ser falado..."></textarea><br>
        <button onclick="transcricao()">Ouvir Texto</button>
      </div>
    </div>
  </main>
  
  
</body>
</html>
