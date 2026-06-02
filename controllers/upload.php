<?php
session_start();
$usuario = $_SESSION['usuario'];
$nome_livro = $_POST['nome_livro'];
$categoria = $_POST['categoria'];
$arquivo_imagem = $_FILES['imagem'];
$tipoDeArquivo = strtolower(
    pathinfo(
        $arquivo_imagem['name']
        PATHINFO_EXTENSION
    )
);
if ($arquivo_imagem['error']!==0){
    die('erro no upload');
}
if($tipoDeArquivo!=='png'){
    die('apenas png<3');
}
$nomeDoArquivo = uniqid() .'.png';

?>