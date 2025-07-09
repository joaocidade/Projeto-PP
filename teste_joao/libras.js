 const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    // Inicializa o MediaPipe Hands
    const hands = new Hands({
      locateFile: (file) => `https://cdn.jsdelivr.net/npm/@mediapipe/hands/${file}`,
    });

    hands.setOptions({
      maxNumHands: 1,
      modelComplexity: 1,
      minDetectionConfidence: 0.8,
      minTrackingConfidence: 0.8,
    });

    // Quando o resultado da detecção estiver pronto
    hands.onResults((results) => {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.drawImage(results.image, 0, 0, canvas.width, canvas.height);

  if (results.multiHandLandmarks) {
    for (const landmarks of results.multiHandLandmarks) {
      drawConnectors(ctx, landmarks, HAND_CONNECTIONS, { color: '#00FF00', lineWidth: 2 });
      drawLandmarks(ctx, landmarks, { color: '#FF0000', lineWidth: 1 });

      // Detectar gesto:
      const gesto = detectarGesto(landmarks);
      ctx.font = '30px Arial';
      ctx.fillStyle = 'blue';
      ctx.fillText(`Gesto: ${gesto}`, 10, 40);
    }
  }
});


    // Ativa a câmera
    const camera = new Camera(video, {
      onFrame: async () => {
        await hands.send({ image: video });
      },
      width: 640,
      height: 480,
    });
    function detectarGesto(landmarks) {
  // Índices dos pontos das pontas dos dedos
  const TIPS = [8, 12, 16, 20]; // Indicador, médio, anelar, mínimo
  let dedosEstendidos = 0;

  // Checar se dedos estão estendidos (comparar TIP com ponto anterior - PIP)
  TIPS.forEach((tipIndex) => {
    const tipY = landmarks[tipIndex].y;
    const pipY = landmarks[tipIndex - 2].y;
    if (tipY < pipY) {
      dedosEstendidos++;
    }
  });

  // Checar polegar estendido (eixo X, pois polegar se move lateral)
  const polegarX = landmarks[4].x;
  const basePolegarX = landmarks[2].x;
  const polegarEstendido = polegarX > basePolegarX;

  // Lógica de gestos
  if (dedosEstendidos === 0 && polegarEstendido) return "Joinha 👍";
  if (dedosEstendidos === 4 && !polegarEstendido) return "Mão aberta ✋";
  if (dedosEstendidos === 0 && !polegarEstendido) return "Punho fechado ✊";

  return "Gesto indefinido";
}

    camera.start();