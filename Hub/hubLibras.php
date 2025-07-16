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
  <title>Detector de Mão com MediaPipe</title>
  <style>
    video, canvas {
      position: absolute;
      left: 0;
      top: 0;
      width: 640px;
      height: 480px;
    }
  </style>
</head>
<body>
  <video id="video" autoplay></video>
  <canvas id="canvas"></canvas>

  <!-- MediaPipe e utilitários -->
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/hands/hands.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@mediapipe/drawing_utils/drawing_utils.min.js"></script>
  <script src="https://cdn.jsde livr.net/npm/@mediapipe/camera_utils/camera_utils.js"></script>

  <script src="libras.js"></script>
  
</body>
  <script src="libras.js"></script><script src="menu.js"></script>
</html>