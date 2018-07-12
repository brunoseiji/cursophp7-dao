<?php 

require_once("config.php");

// Carrega um usuário
//$user = new Usuario();
//$user->loadById(4);
//echo $user;

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

// Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("jose", "1234567890");
//echo $usuario;

// Criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//Alterar o usuário
//$usuario = new Usuario();
//$usuario->loadById(11);
//$usuario->update("professor", "!@#$");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

 ?>