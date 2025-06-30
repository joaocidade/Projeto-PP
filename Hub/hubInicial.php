<?php
include_once '../Incluir/conexao.php';

//comando de SQL para executar
$sql = "SELECT * FROM alunos";

//executa e retorna os dados
$resultado = mysqli_query($conn,$sql);
?>
    <div class='header'>
        <h1> Olá! Seja bem-vindo(a) ao Hub, professor! INICIAL</h1>
    </div>

    <main>
        <div class="container">
            <h1>Lista de Alunos</h1>
            <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Teto Salárial</th>
                <th>Ações</th>
                </tr>
            </thead>
            <?php
                while ($dado = mysqli_fetch_assoc($resultado)){
            ?>
            <tbody>
                <tr>
                <td><?php echo $dado['CargoID'] ?></td>
                <td><?php echo $dado['Nome'] ?></td>
                <td><?php echo $dado['TetoSalar'] ?></td>
                <td>
                    <a href="./salvar-cargos.php?cargoid=<?php echo $dado['CargoID']?>" class="btn btn-edit">Editar</a>
                    <a href="./action/cargos.php?acao=delete&cargoid=<?php echo $dado['CargoID'] ?>" class="btn btn-delete">Excluir</a>
                </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
            </table>
        </div> 
    </main>
    
    <footer>
        <p>Os videoaulas não são de nossa autoria.</p>
        <p style="font-size: 25px; margin-top:10px;">Copyright © 2024-2025, development by RA: educação e tecnologia.</p>  
    </footer>
<script src="menu.js"></script>