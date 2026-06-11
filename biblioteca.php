<?php
session_start();
$usuario = $_SESSION['usuario'];

$livro = [];

if (file_exists('data/books.json')){
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Biblioteca</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/biblioteca.css">
</head>
<body>
    <?php include_once 'includes/header.php';?>

    <div id="upload-popup" class="overlay">
        <form action="controllers/upload.php" method="POST" enctype="multipart/form-data">
            <label for="imagem">Coloque a capa do livro:</label>
            <input type="file" name="imagem">
            <label for="nome_livro">Coloque o nome do livro:</label>
            <input type="text" name="nome_livro">
            <label for="categoria">Categoria:</label>
            <select name="categoria" required>
                <option value="pretendo_ler">Pretendo ler</option>
                <option value="lendo">Lendo</option>
                <option value="li">Li</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php include_once 'includes/footer.php';?>
</body>
</html>