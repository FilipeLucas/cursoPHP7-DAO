<?php

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql-> select ("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
==========================================================
*/

/*Retorna usuário especificado pelo ID
$root = new Usuario();

$root->loadById(2);

echo $root;
==========================================================
*/

/*Retorna uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);
==========================================================
*/

/*Retorna uma lista de usuarios especificando pelo Login
$search = Usuario::search("Mateus");

echo json_encode($search);
==========================================================
*/

/*Retorna usuário validando com login e senha por exemplo.
$usuario = new Usuario();
$usuario->login("josé", "123548");

echo $usuario;
==========================================================
*/
/*Criando um novo usuário
$aluno = new Usuario("aluno", "@aluno");

$aluno->insert();

echo $aluno;
==========================================================
*/
/*Alterar dados de um usuário ou item da tabela
$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("Professor", "professor123");

echo $usuario;
*/
$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;

?>