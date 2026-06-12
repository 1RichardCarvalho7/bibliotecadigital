<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="assets/css/loginEcadastro.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/css/loginEcadastro.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="assets/imagens/favicon.png" alt="Logo">
            <div class="titulo">
                <span>Bibliolandy</span>
            </div>
            <h1 class="textao">Crie sua conta!</h1>
        </div>
    <div class="right">
        <div class="chiclete">
            <div class="card">
            <form action="controllers/cadastro.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
            <label for="senha">Senha</label>
            <input type="password" name="senha" required>
            <button type="submit">Cadastrar</button>
            </form>

            <?php 
                if (isset($_SESSION['erro_usuarioExiste'])){
                    echo "<p>" . $_SESSION['erro_usuarioExiste'] . "</p>";
                    unset($_SESSION['erro_usuarioExiste']);
                }
            ?>

            </div>
            <div class="linha">
                <p class="p">Já possui uma conta? <a class="a" href="login.php">Faça login aqui!</a></p>
            </div>
        </div>
        </div>
        
    </div>
    </div>
</body>
</html>