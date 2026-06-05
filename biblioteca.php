<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Biblioteca</title>
    <link rel="shortcut icon" href="assets/imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/biblioteca.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once 'includes/header.php';?>

    <?php if (isset($_GET['popup']) && $_GET['popup'] === 'abrir'): ?>
    <div id="upload-popup" class="overlay">
        <a href="biblioteca.php">X</a>
        <form action="controllers/upload.php" method="POST" enctype="multipart/form-data">
            <label for="imagem">coloque a capa do livro:</label>
            <input type="file" name="imagem">
            <label for="nome_livro">coloque o nome do livro:</label>
            <input type="text" name="nome_livro">
            <label for="categoria">categoria:</label>
            <select name="categoria" required>
                <option value="pretendo_ler">pretendo ler</option>
                <option value="lendo">lendo</option>
                <option value="li">li</option>
            </select>
            <button type="submit">enviar</button>
        </form>
    </div>
    <?php endif; ?>
    <?php include_once 'includes/footer.php';?>
</body>
</html>