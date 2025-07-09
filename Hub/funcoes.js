let reconhecimento;
let emReconhecimento = false;

function reconhecerFala() {
  reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
  reconhecimento.lang = 'pt-BR';
  reconhecimento.interimResults = false;
  reconhecimento.maxAlternatives = 1;

  reconhecimento.onstart = () => {
    emReconhecimento = true; 
    document.getElementById("resultado").textContent = "Ouvindo...";
  };

  reconhecimento.onresult = (event) => {
    const texto = event.results[0][0].transcript;
    document.getElementById("resultado").textContent = "Você disse: " + texto;
  };

  reconhecimento.onerror = (event) => {
    document.getElementById("resultado").textContent = "Erro: " + event.error;
  };

  reconhecimento.onend = () => {
    emReconhecimento = false;
    console.log("Reconhecimento parado");
  };

  reconhecimento.start();
}

function pararReconhecimento() {
  if (emReconhecimento && reconhecimento) {
    console.log("bah");
    reconhecimento.stop();
  } else {
    console.log("Reconhecimento já parado ou não iniciado.");
  }
}

function transcricao() {
  const texto = document.getElementById("entradaTexto").value;
  const fala = new SpeechSynthesisUtterance(texto);
  fala.lang = 'pt-BR';
  fala.rate = 1;
  fala.pitch = 1;
  fala.volume = 1;
  speechSynthesis.speak(fala);
}
