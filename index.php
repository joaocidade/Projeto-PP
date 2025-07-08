<?php

include_once('./Incluir/conexao.php');

if(isset($_POST['cadastro'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_insert = "INSERT INTO alunos (Nome, Email, Senha)
    VALUES ('{$nome}','{$email}','{$senha}')";

    if ($resultado = mysqli_query($conn, $sql_insert)){
      header('Location: http://localhost:8080/Projeto-PP/Hub/controller.php');
    };
}

if(isset($_POST['entrar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql_insert = "?";
}

?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content=
    "width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styleInicio.css">
    <title>Aprendizado impersivo e inclusivo online</title>

    <link rel="icon" href="Imagens/Logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <header id="header">
      <img src="./Imagens/Logo.png" alt="" id="logo">
      <button type="button" data-toggle="modal" data-target="#cadastroModal" class="cadastre-se">Cadastre-se</button>
      <button type="button" data-toggle="modal" data-target="#entrarModal" id="entre">Entre</button>
    </header>

    <main>
      <!--MODAL CADASTRO-->
      <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cadastre-se</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="index.php" method="POST">
                <div class="inputBox">
                  <label for="nome">Nome completo</label><br>
                  <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <div class="inputBox">
                  <label for="email">Email</label><br>
                  <input type="text" name="email" id="email" class="inputUser" required>
                </div>
                <div class="inputBox">
                  <label for="senha">Senha</label><br>
                  <input type="text" name="senha" id="senha" class="inputUser" required>
                </div><br>
                <input type="submit" name="cadastro" id="cadastro" class="btn btn-primary">
              </form><br>
            </div>
          </div>
        </div>
      </div>

      <!--MODAL LOGIN-->
      <div class="modal fade" id="entrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Entre</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="index.php" method="POST">
                <div class="inputBox">
                  <label for="email">Email</label><br>
                  <input type="text" name="email" id="email" class="inputUser" required>
                </div>
                <div class="inputBox">
                  <label for="senha">Senha</label><br>
                  <input type="text" name="senha" id="senha" class="inputUser" required>
                </div><br>
                <input type="submit" name="entrar" id="entrar" class="btn btn-primary">
              </form><br>
            </div>
          </div>
        </div>
      </div>


      <div id="title">
        <h1>Aprender nunca <br>foi tão imersivo</h1>
        <p>Explore o conhecimento em 360° e transforme os estudos em uma verdadeira jornada.</p>
        <button type="button" data-toggle="modal" data-target="#cadastroModal" class="cadastre-se" id="cadastro_title">Cadastre-se</button>
      </div>

      <div id="funcionalidades">
        <div class="card_funcionalidade" id="hub_educacional">
          <div class="card-body">
            <img src="Imagens/IconeLivro.gif" alt="" id="book">
            <h5 class="card-title">HUB EDUCACIONAL</h5>
            <p class="card-text">Vídeos educacionais imersivos em 360°</p>
          </div>
        </div>
        <div class="card_funcionalidade" id="transcrição_de_texto">
          <div class="card-body">
            <img src="Imagens/IconeDocumento.gif" alt="" id="document">
            <h5 class="card-title">LEITURA DE TEXTO</h5>
            <p class="card-text">Conversão de texto para áudio em tempo real</p>
          </div>
        </div>
        <div class="card_funcionalidade" id="leitor_de_libras">
          <div class="card-body">
            <img src="Imagens/IconeJoinha.gif" alt="" id="telephone">
            <h5 class="card-title">LEITURA DE LIBRAS</h5>
            <p class="card-text">Conversão de libras para texto em tempo real</p>
          </div>
        </div>
        <div class="card_funcionalidade" id ="reconhecimento_de_voz">
          <div class="card-body">
            <img src="Imagens/IconeMicrofone.gif" alt="" id="voice">
            <h5 class="card-title">TRANSCRIÇÃO DE ÁUDIO</h5>
            <p class="card-text">Conversão de áudio para texto em tempo real</p>
          </div>
        </div>
      </div>
      
      <div id ="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2t8ycK8D4Rk?si=-NkpWjWUGG-CVja8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h2>Os melhores recursos de aprendizagem interativa com acessibilidade</h2>
        <p>Uma única matrícula, um universo gamificado de aprendizado. Comece hoje e garanta acesso imediato a todos os recursos para você ou para seus alunos.</p>
      </div>        
      
      <div id="div_cadastro">
        <H1>Comece agora e garanta acesso imediato a todos os recursos para você ou para seus alunos</H1>
        <button type="button" data-toggle="modal" data-target="#cadastroModal" class="cadastre-se" id="cadastro_cadastro">Cadastre-se</button>
      </div>
    </main>

    <footer>
      <div class="inicio">
        <div class="td">
          <div class="logo">
            <img src="Imagens/Logo.png" alt="">
          </div>
          <div class="caixas">
            <div class="AboutUs">
              <p><a href="parceria.html">Parcerias</a></p>
              <p><a href="projetos.html">Projetos</a></p>
              <p><a href="termos.html">Termos de serviço</a></p>
              <p><a href="privacidade.html">Privacidade</a></p>
              <p><a href="estudosRA.html">Estudos e pesquisas AR</a></p>
            </div>
            <div class="More">
              <p><a href="quemsomos.html">Quem somos</a></p>
              <p><a href="ferramentas.html">Ferramentas</a></p>
              <p><a href="eventos.html">Eventos participados</a></p>
              <p><a href="ganhos.html">Ganhos</a></p>
              <p><a href="">Homepage</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="final">
        <h6>Development by</h6>
        <div class="contributor">
          <a href=""><img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="0"><p>Felipe R.</p></a>
          <a href=""><img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="0"><p>Gabriel A.</p></a>
          <a href=""><img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="0"><p>João Pedro C.</p></a>
          <a href=""><img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" alt="0"><p>Francisco E.</p></a>
        </div>
      </div>
    </footer>
    <script src="script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>