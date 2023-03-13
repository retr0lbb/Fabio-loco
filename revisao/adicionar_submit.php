<?php 
include 'Usuario.class.php';
$usuario = new Usuario();

$nome  = addslashes($_POST['nome']);
$senha = md5(addslashes($_POST['senha']));
$email = addslashes($_POST['email']);

$usuario->adicionarContato($nome,$email,$senha);
