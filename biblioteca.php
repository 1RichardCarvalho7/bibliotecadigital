<?php
session_start();
$usuario = $_SESSION['usuario'];

$livros = [];

if (file_exists('data/books.json')){
    $livros = json_decode(
        file_get_contents('data/books.json'),
        true
    ) ?? [];
}
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
        <a href="biblioteca.php">ⓧ</a>
        <form action="controllers/upload.php" method="POST" enctype="multipart/form-data">
            <label for="imagem">Coloque a capa do livro:</label>
            <input type="file" name="imagem">
            <label for="nome_livro">Coloque o nome do livro:</label>
            <input type="text" name="nome_livro">
            <label for="categoria">Categoria:</label>
            <select name="categoria" required>
                <option value="pretendo_ler">Pretendo ler</option>
                <option value="lendo">Lendo</option>
                <option value="lido">Lido</option>
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
    <?php endif; ?>

        
    <!-- PRIMEIRA CATEGORIA -->


    <h2>Pretendo Ler</h2>
     
    <div> <!-- Aqui é onde vai ficar o carrossel -->
        <?php foreach($livros as $livro): ?>
            <?php 
            if(
                $livro['usuario'] !== $usuario ||
                $livro['categoria'] !== 'pretendo_ler'
            )    {
                continue;
            }
            ?>

            <div> <!-- Aqui é onde vai ficar o card do livro -->
                <img src="uploads/<?= htmlspecialchars($livro['capa']) ?>" alt="<?= htmlspecialchars($livro['nome']) ?>"> <!-- Imagem da capa do livro -->
                <h3> <?= htmlspecialchars($livro['nome']) ?></h3> <!-- Nome do livro -->

                <form action="controllers/mudarCategoria.php" method="post"> <!-- Botão para trocar de categoria -->
                    <input type="hidden" name="id" value="<?= $livro['id'] ?>">
                    
                    <select name="categoria" id="">
                        <option value="pretendo_ler">Pretendo ler</option>
                        <option value="lendo">Lendo</option>
                        <option value="lido">Lido</option>
                    </select>
                    <button type="submit">Mudar</button>
                </form>

            </div>
        <?php endforeach; ?>
    </div>



    <!-- SEGUNDA CATEGORIA -->



    <h2>Lendo</h2> 

    <div> <!-- Aqui é onde vai ficar o carrossel -->
        <?php foreach($livros as $livro): ?>
            <?php 
            if(
                $livro['usuario'] !== $usuario ||
                $livro['categoria'] !== 'lendo'
            )    {
                continue;
            }
            ?>

            <div> <!-- Aqui é onde vai ficar o card do livro -->
                <img src="uploads/<?= htmlspecialchars($livro['capa']) ?>" alt="<?= htmlspecialchars($livro['nome']) ?>"> <!-- Imagem da capa do livro -->
                <h3> <?= htmlspecialchars($livro['nome']) ?></h3> <!-- Nome do livro -->

                <form action="controllers/mudarCategoria.php" method="post"> <!-- Botão para trocar de categoria -->
                    <input type="hidden" name="id" value="<?= $livro['id'] ?>">
                    
                    <select name="categoria" id="">
                        <option value="pretendo_ler">Pretendo ler</option>
                        <option value="lendo">Lendo</option>
                        <option value="lido">Lido</option>
                    </select>
                    <button type="submit">Mudar</button>
                </form>

            </div>
        <?php endforeach; ?>
    </div>


    <!-- TERCEIRA CATEGORIA -->


    <h2>Lidos</h2>

    <div> <!-- Aqui é onde vai ficar o carrossel -->
        <?php foreach($livros as $livro): ?>
            <?php 
            if(
                $livro['usuario'] !== $usuario ||
                $livro['categoria'] !== 'lido'
            )    {
                continue;
            }
            ?>

            <div> <!-- Aqui é onde vai ficar o card do livro -->
                <img src="uploads/<?= htmlspecialchars($livro['capa']) ?>" alt="<?= htmlspecialchars($livro['nome']) ?>"> <!-- Imagem da capa do livro -->
                <h3> <?= htmlspecialchars($livro['nome']) ?></h3> <!-- Nome do livro -->

                <form action="controllers/mudarCategoria.php" method="post"> <!-- Botão para trocar de categoria -->
                    <input type="hidden" name="id" value="<?= $livro['id'] ?>">
                    
                    <select name="categoria" id="">
                        <option value="pretendo_ler">Pretendo ler</option>
                        <option value="lendo">Lendo</option>
                        <option value="lido">Lido</option>
                    </select>
                    <button type="submit">Mudar</button>
                </form>

            </div>
        <?php endforeach; ?>
    </div>

    <?php include_once 'includes/footer.php';?>
</body>
</html>