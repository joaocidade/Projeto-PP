const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

const TIPS = [8, 12, 16, 20]; // Pontas dos dedos indicador ao mindinho
const PIP = [6, 10, 14, 18];  // Articulações do meio

const hands = new Hands({
  locateFile: (file) => `https://cdn.jsdelivr.net/npm/@mediapipe/hands/${file}`,
});

hands.setOptions({
  maxNumHands: 1,
  modelComplexity: 1,
  minDetectionConfidence: 0.8,
  minTrackingConfidence: 0.8,
});

hands.onResults((results) => {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.drawImage(results.image, 0, 0, canvas.width, canvas.height);

  if (results.multiHandLandmarks) {
    for (const landmarks of results.multiHandLandmarks) {
      drawConnectors(ctx, landmarks, HAND_CONNECTIONS, { color: '#00FF00', lineWidth: 2 });
      drawLandmarks(ctx, landmarks, { color: '#FF0000', lineWidth: 1 });

      const gesto = detectarGesto(landmarks);
      ctx.font = '30px Arial';
      ctx.fillStyle = 'blue';
      ctx.fillText(`Gesto: ${gesto}`, 10, 40);
    }
  }
});

const camera = new Camera(video, {
  onFrame: async () => {
    await hands.send({ image: video });
  },
  width: 640,
  height: 480,
});
camera.start();

// --------------------- Função de Detecção de Gesto ---------------------
function detectarGesto(landmarks) {
  let dedosEstendidos = 0;
  let ArticulacoesMediasEstendidas = 0;

  // Checar se dedos estão estendidos
  TIPS.forEach((tipIndex) => {
    const tipY = landmarks[tipIndex].y;
    const pipY = landmarks[tipIndex - 2].y;
    if (tipY < pipY) {
      dedosEstendidos++;
    }
  });

  // Checar se articulações médias estão estendidas
  PIP.forEach((pipIndex) => {
    const pipY = landmarks[pipIndex].y;
    const pip2Y = landmarks[pipIndex - 2].y;
    if (pipY < pip2Y) {
      ArticulacoesMediasEstendidas++;
    }
  });

  // Checar se o polegar está estendido (eixo X)
  const polegarX = landmarks[4].x;
  const basePolegarX = landmarks[2].x;
  const polegarEstendido = polegarX > basePolegarX;

  // Estado do dedo médio
  const dedoMedioEstado = estadoDedoMedio(landmarks);

  const dedoIndicadorEstado = dedoIndicador(landmarks); 

  // Lógica de gestos
  if (dedosEstendidos === 0 && polegarEstendido) return "A";
  if (dedosEstendidos === 4 && !polegarEstendido) return "B";
  if (dedoMedioEstado === "meio fechado" && ArticulacoesMediasEstendidas === 4 && polegarEstendido) return "C";
  if (dedosEstendidos === 0 && dedoIndicadorEstado && polegarEstendido == 4) return"D";
  if (dedosEstendidos === 0 && !polegarEstendido ) return  "E";
  if(polegarEstendido === 0 && !polegarEstendido); 
  return "Gesto indefinido"; 
}
function estadoDedoMedio(landmarks) {
  const mcp = landmarks[9].y;   // base do dedo médio
  const pip = landmarks[10].y;  // articulação do meio
  const tip = landmarks[12].y;  // ponta

  if (tip > pip && pip < mcp) {
    return "meio fechado";
  } else if (tip < pip && pip < mcp) {
    return "esticado";
  } else {
    return "fechado";
  }
}
function dedoIndicador(landmarks){
  const tip = landmarks[12].y;

  if(tip == true){
    return "aberto";
  }else{
    return "fechado";
  }
}

