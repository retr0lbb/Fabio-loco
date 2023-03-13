<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de cadastro</title>
</head>
<body>
	<h1>Cadastrar Usuario</h1>

	<form method="post" action="adicionar_submit.php">
		Nome:<br>
		<input type="text" name="nome"><br><br>
		
		Email:<br>
		<input type="email" name="email"><br><br>

		Senha:<br>
		<input type="password" name="senha"><br><br>

		<input type="submit" value="Enviar Dados">

	</form>

</body>
</html>