<?php 

require_once("config.php");

//Carregar usuario por ID
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carregar lista
$lista = Usuario::getList();
echo json_encode($lista);

//Carregar lista de usuários pelo login
//$search = Usuario::searchUser("jo");
//echo json_encode($search);

//Carregar usuário por login e senha
//$usuario = new Usuario();
//$usuario->login("root", "root");
//echo $usuario;

//Inserir usuário
//$usuario = new Usuario();
//$usuario->setDeslogin("renan");
//$usuario->setDessenha("renan");
//$usuario->insert();


?>