<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Projeto A3 </title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: blanchedalmond;
		}

		center {
			margin-top: 100px;
		}

		h1 {
			color: black;
		}

		form {
			width: 400px;
			padding: 40px;
			background-color: gray;
			border-radius: 100px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		}

		input[type="text"],
		input[type="password"] {
			width: 50%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 50px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			width: 30%;
			padding: 10px;
			background-color: gainsboro;
			color: black;
			border: none;
			border-radius: 10px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: paleturquoise;
		}

		a {
			color: greenyellow;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<center>
		<h1>Login</h1>
		<form id="form-login" action="logado.php" method="POST">
			Login: <input type="text" name="login" required><br>
			Senha: <input type="password" name="senha" required><br><br>
			<input type="submit" name="entrar" value="Entrar">
			<p>Não tem conta?, Crie uma conta <a href="cadastro.php">aqui!</a></p>
			<p><a href="alterarsenha2.php">Esqueceu a senha?</a></p>
		</form>
	</center>
</body>
</html>
