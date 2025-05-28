function reconhecerFala() {
      const reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
      reconhecimento.lang = 'pt-BR';
      reconhecimento.interimResults = false;
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
        const reconhecimento = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        reconhecimento.stop(reconhecerFala());
    }
    function transcricao(){
    const texto = () => document.getElementById("resultado").value;
    const fala = new SpeechSynthesisUtterance(texto());
    fala.lang = 'pt-BR';    
    fala.rate = 1;           
    fala.pitch = 1;         
    fala.volume = 1;        
    speechSynthesis.speak(fala);
        
    } 