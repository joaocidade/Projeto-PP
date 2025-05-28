function reconhecerFala() {
      const reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
      reconhecimento.lang = 'pt-BR';
      reconhecimento.interimResults = true ;
      reconhecimento.maxAlternatives = 1;
 
      reconhecimento.onstart = () => {
        document.getElementById("resultado").textContent = "Ouvindo...";
      };
 
      reconhecimento.onresult = (event) => {
        const texto = event.results[0][0].transcript;
        document.getElementById("resultado").textContent = "Você disse: " + texto;
      };
 
      reconhecimento.onerror = (event) => {
        document.getElementById("resultado").textContent = "Erro: " + event.error;
      };
 
      reconhecimento.start();
    }
    function pararReconhecimento(){
        console.log
        const reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        reconhecimento.stop();
    }