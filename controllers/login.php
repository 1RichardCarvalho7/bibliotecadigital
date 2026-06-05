<?php

session_start();
unset($_SESSION['erro_credenciaisLogin']);

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$arquivo =  __DIR__ . "/../data/users.json";
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo); // Coleta o conteúdo do arquivo (em json)
} else{die("Nenhum usuário cadastrado.");}
$usuarios_json = json_decode($conteudo, true); // Converte o conteúdo em json para o padrão que o php entende (array associativo) O true faz o objeto ser convertido em array associativo. Quando está definido como falso retorna um objeto (padrão: false)

if ($usuarios_json === null){
    die("Arquivo de usuários inválido.");
}

foreach ($usuarios_json as $usuario){
    if($usuario['nome'] === $nome && password_verify($senha, $usuario['senha'])){ ## Verifica se o nome e a senha correspondem ao nome e a senha (em hash) do arquivo users.json

       $_SESSION['usuario'] = $usuario['nome']; ## Salva a sessão com o nome de usuário correspondente

       header("Location: ../biblioteca.php");

       exit;
    }
}

$_SESSION['erro_credenciaisLogin'] = "Usuário ou senha inválidos!";
        
header("Location: ../login.php");
exit();
?>