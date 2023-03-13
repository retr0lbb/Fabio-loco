<?php
require 'Usuario.class.php';
$usuario = new Usuario();


if (!empty($GET_['id'])){
	$id = $_GET['id'];
	$usuario->apagarContato($id);
	header("location.index.php");
}