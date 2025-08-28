<?php
include_once '../../Incluir/conexao.php';
include_once '../../Incluir/protect.php';

//comando de SQL para executar
$sql = "SELECT * FROM alunos";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);

$atulizador = date('YmdHis').rand(0,99999999999);
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | WebXR1</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="../../Imagens/Logo.png">
    <link rel="stylesheet" href="TemplateData/style.css?t=<?php echo $atulizador;?>">
  </head>
  <body>
    <div id="unity-container">
      <div id="unity-canvas-container">
        <canvas id="unity-canvas" style="width: 100%; height: 100%;"></canvas>
      </div>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-footer">
        <div id="unity-webgl-logo"></div>
        <button id="entervr" value="Enter VR" disabled>VR</button>
        <button id="enterar" value="Enter AR" disabled>AR</button>
      </div>
    </div>
    <script>
      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/Projeto5.loader.js";
      var config = {
        dataUrl: buildUrl + "/Projeto5.data",
        frameworkUrl: buildUrl + "/Projeto5.framework.js",
        codeUrl: buildUrl + "/Projeto5.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "DefaultCompany",
        productName: "WebXR1",
        productVersion: "0.1",
      };

      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var canvasContainer = document.querySelector("#unity-canvas-container");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");
      var unityInstance = null;
      

      canvasContainer.style.width = "700px";
      canvasContainer.style.height = "400px";
      loadingBar.style.display = "block";

      var script = document.createElement("script");
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((instance) => {
          unityInstance = instance;
          loadingBar.style.display = "none";
          if (fullscreenButton)
          {
            fullscreenButton.onclick = () => {
              unityInstance.SetFullscreen(1);
            };
          }
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);

      let enterARButton = document.getElementById('enterar');
      let enterVRButton = document.getElementById('entervr');

      document.addEventListener('onARSupportedCheck', function (event) {
        enterARButton.disabled = !event.detail.supported;
      }, false);
      document.addEventListener('onVRSupportedCheck', function (event) {
        enterVRButton.disabled = !event.detail.supported;
      }, false);

      enterARButton.addEventListener('click', function (event) {
        unityInstance.Module.WebXR.toggleAR();
      }, false);
      enterVRButton.addEventListener('click', function (event) {
        unityInstance.Module.WebXR.toggleVR();
      }, false);
    </script>
  </body>
</html>
