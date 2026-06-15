<?php 
$id = $_POST['id'];
$novaCategoria = $_POST['categoria']; // Pega o valor da categoria que o usuário quer mudar

$livros = json_decode(file_get_contents('../data/books.json'), true);

foreach ($livros as $indice => $livro){
    if ($livro['id'] == $id){
        if ($novaCategoria == "remover"){
            $arquivoImagem = '../uploads/' . $livro['capa']; //Remove a imagem da capa
            if (file_exists($arquivoImagem)){
                unlink($arquivoImagem);
            }
            unset($livros[$indice]);
        } else{
            $livros[$indice]['categoria'] = $novaCategoria;
        }

        break;
    }
}


file_put_contents('../data/books.json', json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: ../biblioteca.php');
exit;
?>