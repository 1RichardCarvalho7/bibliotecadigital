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
    '    <div class="left">
        <img src="assets/imagens/favicon.png" alt="Logo">
        <div class="titulo">
            <span>Bibliolandy</span>
        </div>
        <h1 class="textao">Entre em sua conta!</h1>
    </div>
    <div class="right">
        <div class="chiclete">
            <form action="controllers/login.php" method="post">
            <div class="card">
                <form action="controllers/login.php" method="post">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" required>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" required>
                    <button type="submit">Entrar</button>
                </form> 
                <?php 
                if (isset($_SESSION['erro_credenciaisLogin'])){
                    echo "<p>" . $_SESSION['erro_credenciaisLogin'] . "</p>";
                    unset($_SESSION['erro_credenciaisLogin']);
                }
                ?>
            </div>
            
        <div class="linha">
                <p class="p">Não possui uma conta? <a class="a" href="cadastro.php">Crie aqui!</a></p>
            </div>  
            </div>  
        </div>
    </div>
    
</body>
</html>