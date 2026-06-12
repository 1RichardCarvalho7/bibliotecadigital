<?php 
$id = $_POST['id'];
$novaCategoria = $_POST['categoria'];

$livros = json_decode(file_get_contents('../data/books.json'), true);

foreach ($livros as $livro){
    if ($livro['id'] === $id){
        $livro['categoria'] = $novaCategoria;

        break;
    }
}

file_put_contents('../data/books.json', json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: ../biblioteca.php');
exit;
?>