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
    <h2 class="titulo-login">Entre em sua conta!</h2>
    <form action="controllers/login.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" required>
        <label for="senha">Senha</label>
        <input type="text" name="senha" required>
        <button type="submit">Logar</button>
    </form>

    <p>Não possui uma conta? <a href="cadastro.php">Crie aqui!</a></p>
</body>
</html>