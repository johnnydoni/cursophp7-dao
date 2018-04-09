<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

// Carregar um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// Carregar uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carregar uma lista de usuários buscando pelo login
//$search = Usuario::search("se");
//echo json_encode($search);

// Carregar um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("sdjr", "123456");
echo $usuario;

 ?>