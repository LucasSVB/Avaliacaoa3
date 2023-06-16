<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
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
            padding: 10px;
            margin-bottom: 20px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 25px;
            background-color: gainsboro;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: lavender;
        }

        a {
            color: #999;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <center>
        <h1>Cadastro</h1>
        <form id="Cadastro" action="cadastrar.php" method="POST">
            nome: <input type="text" name="nome" required><br>
            login: <input type="text" name="login" required><br>
            senha: <input type="password" name="senha" required><br><br>
            <input type="submit" name="cadastrar" value="Cadastrar">
            <p>
                <a href="login.php">Voltar</a><br>
            </p>
        </form>
    </center>
</body>
</html>
