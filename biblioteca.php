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
            <label for="nome-autor">coloque o nome do autor:</label>
            <input type="text" name="nome-autor">
            <button type="submit">enviar</button>
        </form>
    </div>

    <?php include_once 'includes/footer.php';?>
</body>
</html>