<?php

include_once('./Incluir/conexao.php');

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){
    header("Location: ./Hub/controller.php");
}

if(isset($_POST['cadastro'])){
  if(strlen($_POST['nome']) == 0){
    echo "Preencha seu nome.";
  }
  else if(strlen($_POST['email']) == 0){
    echo "Preencha seu email.";
  }
  else if(strlen($_POST['senha']) == 0){
    echo "Preencha sua senha.";
  }
  else {
    $nome = $conn->real_escape_string($_POST['nome']);
    $email = $conn->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];
    if (empty($_POST['id_escola'])){
      $id_escola = 0;
    } else{
      $id_escola = $_POST['id_escola'];
    }
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    
    $sql_code = "SELECT * FROM alunos WHERE email = '$email'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

    if ($sql_query->num_rows == 1){
      echo "Este email já está associado a uma conta.";
    } else {
      $insert = "INSERT INTO $cargo (Nome, Email, Senha, EscolaID) VALUES ('$nome', '$email', '$senhaHash', '$id_escola')";

      if ($conn->query($insert) === TRUE) {
        $id = $conn->insert_id;

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $id;
        $_SESSION['nome'] = $nome;
        $_SESSION['id_escola'] = $id_escola;

        header('Location: ./Hub/controller.php');
        exit;
      } else {
        echo "Erro ao cadastrar: " . $conn->error;
      }
    }
  }
}

if(isset($_POST['entrar'])){
    if (strlen($_POST['email_entrar']) == 0) {
        echo "Preencha seu email.";
    } else if (strlen($_POST['senha_entrar']) == 0) {
        echo "Preencha sua senha.";
    } else {
        $email = $conn->real_escape_string($_POST['email_entrar']);
        $senha = $_POST['senha_entrar']; // Não aplicar real_escape_string em senhas

        // Buscar o usuário pelo email
        $sql_code = "SELECT * FROM alunos WHERE Email = '$email'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        if ($sql_query->num_rows == 1) {
            $usuario = $sql_query->fetch_assoc();

            echo $senha;
            echo $usuario['Senha'];

            // Verifica se a senha está correta
            $test = password_verify($senha, $usuario['Senha']);
            if ($test == true) { //O PROBLEMA ESTA AQUI, NO "password_verify", pode substituir por qualquer outra condição que vai funcionar
                // Login bem-sucedido
                if (!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['AlunoID'];
                $_SESSION['nome'] = $usuario['Nome'];

                header('Location: ./Hub/controller.php');
                exit;
            } else if($test == false) {
                echo "Senha incorreta.";
            }
        } else {
            echo "Nenhuma conta encontrada com este email.";
        }
    }
}

// Atualizador de CSS e JS
$atulizador = date('YmdHis').rand(0,99999999999);

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

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="styleInicio.css?t=<?php echo $atulizador;?>">
    <title>Aprendizado impersivo e inclusivo online</title>

    <link rel="shortcut icon" href="Imagens/Logo.png">
  </head>
  <body>
    <header id="header">
      <a href="#title"><img src="./Imagens/Logo.png" alt="" id="logo"></a>
      <button type="button" data-toggle="modal" data-target="#cadastroModal" class="cadastre-se" id='cadastro_header'>Cadastre-se</button>
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
                </div><br>
                <div class="inputBox">
                  <label for="email">Email</label><br>
                  <input type="text" name="email" id="email" class="inputUser" required>
                </div><br>
                <div class="inputBox">
                  <label for="senha">Senha</label><br>
                  <input type="password" name="senha" id="senha" class="inputUser" required>
                </div><br>
                <div class="inputBox">
                  <label for="cargo">Cargo</label><br>
                  <input type="radio" name="cargo" value="professores" required>Professor<br>
                  <input type="radio" name="cargo" value="alunos" required>Aluno<br>
                  <input type="radio" name="cargo" value="autodidatas" required>Autodidata
                </div><br>
                <div class="inputBox">
                  <label for="id_escola">ID da Escola <br>*deixe em branco caso não faça parte de uma Instituição de Ensino</label>
                  <input type="number" name="id_escola">
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
                  <input type="text" name="email_entrar" id="email_entrar" class="inputUser" required>
                </div>
                <div class="inputBox">
                  <label for="senha">Senha</label><br>
                  <input type="password" name="senha_entrar" id="senha_entrar" class="inputUser" required>
                </div><br>
                <input type="submit" name="entrar" id="entrar" class="btn btn-primary">
              </form><br>
            </div>
          </div>
        </div>
      </div>

      <div id="title">
        <h1>Educação Imersiva<br><span class='title-highlight'>Para Todos</span></h1>
        <p>Explore o conhecimento em 360° e transforme os estudos em uma verdadeira jornada.</p>
        <button type="button" data-toggle="modal" data-target="#cadastroModal" class="cadastre-se" id="cadastro_title">Cadastre-se</button>
      </div>
      <div class='graficos'>
        <div class='circulos circulo-1'></div>
        <div class='circulos circulo-2'></div>
        <div class='circulos circulo-3'></div>
      </div>

      <div id="funcionalidades">
        <div class="card_funcionalidade" id="hub_educacional">
          <div class="card-body">
            <div class='img-circle'><img src="Imagens/IconeLivro.gif" alt="" id="book"></div>
            <h5 class="card-title">Hub Educacional</h5>
            <p class="card-text">Vídeos imersivos em 360° explorando os principais conteúdos escolares</p>
          </div>
        </div>
        <div class="card_funcionalidade" id="transcrição_de_texto">
          <div class="card-body">
            <div class='img-circle'><img src="Imagens/IconeDocumento.gif" alt="" id="document"></div>
            <h5 class="card-title">Leitura de Texto</h5>
            <p class="card-text">Conversão de texto em áudio para facilitar a comunicação de pessoas mudas</p>
          </div>
        </div>
        <div class="card_funcionalidade" id="leitor_de_libras">
          <div class="card-body">
            <div class='img-circle'><img src="Imagens/IconeJoinha.gif" alt="" id="telephone"></div>
            <h5 class="card-title">Leitura de Libras</h5>
            <p class="card-text">Conversão de libras em texto para facilitar a comunicação com pessoas mudas</p>
          </div>
        </div>
        <div class="card_funcionalidade" id ="reconhecimento_de_voz">
          <div class="card-body">
            <div class='img-circle'><img src="Imagens/IconeMicrofone.gif" alt="" id="voice"></div>
            <h5 class="card-title">Transcrição de Áudio</h5>
            <p class="card-text">Conversão de áudio para texto para facilitar a comunicação com pessoas surdas</p>
          </div>
        </div>
      </div>
      
      <div id ="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2t8ycK8D4Rk?si=-NkpWjWUGG-CVja8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <h2>Os melhores recursos de aprendizagem interativa com acessibilidade</h2>
        <p>Uma única matrícula, um universo gamificado de aprendizado. Comece hoje e garanta acesso imediato a todos os recursos para você ou para seus alunos.</p>
      </div>        
      
      <div id="div_cadastro">
        <H1>Comece agora e garanta acesso imediato a todos os recursos para você ou para seus alunos</H1><br>
        <button type="button" data-toggle="modal" data-target="#cadastroModal" id="cadastro_cadastro">Cadastre-se</button>
      </div>
    </main>

    <footer>
      <div class="td">
        <div class="logo">
          <img src="Imagens/Logo.png" alt="">
        </div>
        <div class="caixas">
          <div class="AboutUs">
            <h5>Institucional</h5>
            <p><a href="parceria.html">Sobre nós</a></p>
            <p><a href="projetos.html">Contato</a></p>
            <p><a href="termos.html">Perguntas frequentes</a></p>
          </div>
          <div class="More">
            <h5>Legal</h5>
            <p><a href="quemsomos.html">Termos de Uso</a></p>
            <p><a href="ferramentas.html">Política de Privacidade</a></p>
          </div>
        </div>
      </div>

      <div class="final">
        <hr>
        <h6>Projeto Estudantil - Livre para fins educacionais.</h6>
      </div>
    </footer>
    <script src="script.js?t=<?php echo $atulizador;?>"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>