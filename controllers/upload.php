<?php
session_start();
$usuario = $_SESSION['usuario'];
$nome_livro = $_POST['nome_livro'];
$categoria = $_POST['categoria'];
$arquivo_imagem = $_FILES['imagem'];
if ($arquivo_imagem['error']!==0){
    die('erro no upload');
}
$tipoDeArquivo = strtolower(
    pathinfo(
        $arquivo_imagem['name'],
        PATHINFO_EXTENSION
    )
); // Procura o endereço e pega apenas o tipo do arquivo (ex: "png")
if(($tipoDeArquivo!=='png') || ($tipoDeArquivo!=='jpg')){
     $_SESSION['erro_tipoArquivo'] = "Tipo de arquivo incorreto! (apenas png/jpg)";
     header('Location: ../biblioteca.php');
     exit;
}

$nomeDoArquivo = uniqid() .'.png'; // Cria um nome único para não substituir um arquivo com o mesmo nome

move_uploaded_file(
    $arquivo_imagem['tmp_name'],
    '../uploads/' . $nomeDoArquivo
); // Move o arquivo que sofreu upload para pasta "uploads" e muda o nome temporário para o nome único

$livros = [];

if (file_exists('../data/books.json')){
    $livros = json_decode(file_get_contents('../data/books.json'),
    true ) ?? [];
} // Se o arquivo books.json existir, pega o conteúdo normalmente, se não, atribui um array vazio ao array $livros

$livros[] = [
    'id' => uniqid(),
    'usuario' => $usuario,
    'nome' => $nome_livro,
    'capa' => $nomeDoArquivo,
    'categoria' => $categoria
];

file_put_contents(
    '../data/books.json',
    json_encode(
        $livros,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    )
); // Repõe o conteúdo com a adição, formatando o json


header('Location: ../biblioteca.php');
exit;
?>