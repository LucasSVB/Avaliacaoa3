<?php
session_start();
?>

<html>
  <link rel= "stylesheet" type = "text/css" href = "estilo.css">
    <center>
    <h1>Bem vindo, <?php
    if(isset($_SESSION['nome'])==null){
    ?>
     Visitante </h1>
     <a href="login.php">login</a>
     <?php } else {
        echo $_SESSION['nome']; ?>
     </h1><br><a href="cadastro.php">Cadastrar</a><br>
         <a href="listausuario.php">Listas de usuários</a><br>
         <a href="alterarsenha.php">Alterar senha</a><br>
         <a href="logout.php">Sair</a>
         <?php } ?>
     </center>
     <body>
    <head>
      <body>

      <style>
    
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
    </head>
  </body>
   <body>
</html>
