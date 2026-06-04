<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="assets/css/loginEcadastro.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="left"></div>
        <div class="logo"> <img src="assets/img/favicon-32x32.png" alt="Logo"> BookLandy</div>
        <h1 class="titulo-login">Entre em sua conta!</h1>
    </div>
    <form action="controllers/login.php" method="post">
        <div class="right"></div>
            <div class="card">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
            <label for="senha">Senha</label>
            <input type="text" name="senha" required>
            <button type="submit">Entrar</button>
        </div>
        <?php 
        if (isset($_SESSION['erroerro_credenciaisLogin'])){
            echo "<p>" . $_SESSION['erroerro_credenciaisLogin'] . "</p>";
            unset($_SESSION['erroerro_credenciaisLogin']);
        }
        ?>
    </form>
    <div class="linha">
    <p class="p">Não possui uma conta? <a class="a" href="cadastro.php">Crie aqui!</a></p>
    </div>
</body>
</html>