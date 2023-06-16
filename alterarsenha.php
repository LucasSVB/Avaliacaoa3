<?php

$host = 'localhost';
$dbname = 'banco3';
$username = 'seu_usuario';
$password = 'sua_senha';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $login = $_POST['login'];
    $currentSenha = $_POST['current_password'];
    $newSenha = $_POST['new_password'];

    
    $stmt = $conn->prepare('SELECT * FROM login WHERE login = :login AND senha = :senha');
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $currentSenha);
    $stmt->execute();

    
    if ($stmt->rowCount() > 0) {
        
        $updateStmt = $conn->prepare('UPDATE login SET senha = :new_senha WHERE login = :login');
        $updateStmt->bindParam(':new_senha', $newSenha);
        $updateStmt->bindParam(':login', $login);
        $updateStmt->execute();

        echo 'Senha trocada!';
    } else {
        echo 'Login ou senha inocorretos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alterar Senha</title>
    <style>
        body {
			font-family: Arial, sans-serif;
			background-color: lavender;
		}

        center {
            margin-top: 50px;
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

        label {
            display: block;
            margin-bottom: 10px;
            color: black;
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
            color: #0d67a3;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <center>
    <h1>Alterar Senha</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="login">Login:</label>
        <input type="text" name="login" required><br><br>

        <label for="current_password">Senha Atual:</label>
        <input type="password" name="current_password" required><br><br>

        <label for="new_password">Nova Senha:</label>
        <input type="password" name="new_password" required><br><br>

        <input type="submit" value="Alterar senha">
        <p>
        <a href= "index.php">Voltar</a><br>
        </p>
