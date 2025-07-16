<?php
include_once '../incluir/conexao.php';

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
    <header>
        <h1>Leitor de Libras</h1>
    </header>

        <video id="video" autoplay></video>
        <canvas id="canvas"></canvas>

          <!-- MediaPipe e utilitários -->
        <script src="https://cdn.jsdelivr.net/npm/@mediapipe/hands/hands.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@mediapipe/drawing_utils/drawing_utils.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@mediapipe/camera_utils/camera_utils.js"></script>

        <script src="libras.js"></script>
</body>
<script src="menu.js"></script>
</html>