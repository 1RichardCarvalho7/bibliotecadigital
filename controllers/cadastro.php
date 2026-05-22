<?php 
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$senhaHash = password_hash($senha,PASSWORD_DEFAULT);
$usuarios = json_decode( file_get_contents('../data/users.json'), true );

$usuario = [
    "nome"=>$nome,
    "senha"=>$senhaHash
];

$usuarios[] = $usuario;


$dados = json_encode($usuarios);
file_put_contents('../data/users.json', $dados);
?>