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
    <div class="txt_recursos">
   
      <p>Estes são os seus recursos:</p>
    </div>
  </header>

  <main id="mainAudio">
    <div id="apresentacao">
      <h1>Bem-vindo ao Hub de Funcionalidades</h1>

      <div id="apresentacao_transcricao"> 
        <h2>Transcrição de Texto</h2>
        <p>Uma funcionalidade focada na transcrição de voz para texto em tempo real,<br> auxiliando pessoas surdas a compreenderem conversas sem precisar utilizar Libras.</p>
        <button onclick="reconhecerFala()">Iniciar Transcrição</button>
        <button onclick="pararReconhecimento()">parar transcrição</button>
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
  
  
</body>
</html>
