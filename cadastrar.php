
<?php
include ("conexão.php");
$nome = isset($_POST['nome'] ) ? $_POST['nome'] : '';
$login = isset($_POST['login'] ) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "insert into login (nome, login, senha)
values
('$nome', '$login', '$senha')";

$query=mysqli_query($conexão, $insert);
?>

<html>
    <body>
        <h2>Cadastro Realizado com sucesso</h2>
        <a href = "index.php">Voltar</a>
    </body>
</html>
