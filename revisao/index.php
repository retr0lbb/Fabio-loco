<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Revisao</title>
</head>
<body>
	<?php
	include 'Usuario.class.php';
	$usuario = new Usuario();	
	$lista = $usuario->getAll();
	?>
	<table border  ="1">
		<tr>
			<th>Codigo</th>
			<th>Nome</th>
			<th>Email</th>
		</tr>	
		<?php
		foreach($lista as $item):
			echo "Codigo ".$item['id']   ." ";
			echo "Nome "  .$item['nome'] ." ";
			echo "Email " .$item['email']."<br>";
			echo"<hr>";
		endforeach;
		?>


</body>
</html>