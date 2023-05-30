<?php

session_start();

?>

<html>
    <body>
        ola, <?php 
        if (isset($_SESSION['nome'])== null){
            ?>
              visitante <br>
              <a href = "login.php"> login </a>
             <?php } else {
                echo $_SESSION['nome']; ?>
             <br><a href = "cadatro.php"> cadastrar </a><br>
                 <a href = "logout.php"> sair </a>
                <?php } ?> 
                            
        
    </body>    
</html>