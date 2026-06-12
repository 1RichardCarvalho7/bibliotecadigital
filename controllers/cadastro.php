<?php 
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$senhaHash = password_hash($senha,PASSWORD_DEFAULT);
$usuarios = json_decode( file_get_contents('../data/users.json'), true );

foreach ($usuarios as $usuario){
    if($usuario['nome'] === $nome){ ## Verifica se já existe um nome igual no arquivo users.json

       $_SESSION['erro_usuarioExiste'] = "Este nome de usuário já existe!";
       exit;
    }
}

$_SESSION['erro_credenciaisLogin'] = "Usuário ou senha inválidos!";

$usuario = [
    "nome"=>$nome,
    "senha"=>$senhaHash
];

$usuarios[] = $usuario;


$dados = json_encode($usuarios);
file_put_contents('../data/users.json', $dados);

header('Location: ../login.php');
exit;
?>