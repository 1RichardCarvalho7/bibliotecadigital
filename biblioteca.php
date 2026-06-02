<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Biblioteca</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once 'includes/header.php';?>

    <div id="upload-popup" class="overlay">
        <form action="controllers/upload.php" method="POST" enctype="multipart/form-data">
            <label for="imagem">coloque a capa do livro:</label>
            <input type="file" name="imagem">
            <label for="nome_livro">coloque o nome do livro:</label>
            <input type="text" name="nome_livro">
            <label for="categoria">
                categoria:
            </label>
            <select name="categoria" required>
            <option value="pretendo_ler">pretendo ler</option>
            <option value="lendo">lendo</option>
            <option value="li">li</option>
            </select>
            <button type="submit">enviar</button>
        </form>
    </div>

    <?php include_once 'includes/footer.php';?>
</body>
</html>