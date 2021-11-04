<?php

    //Para darle persistencia a la sesión, hay que darle un lifetime a esa cookie.
    //Si no, cada vez que se cerrase el navegador, se borraría la variable de sesión.

    ini_set("session.cookie_lifetime", 3600);
    
    session_start();
    
    //isset, si tiene valor.
    
    if (isset($_SESSION["variable"])) {
        echo "La variable está creada";
    } else {
        $_SESSION["variable"] = "Dando este valor a la variable";
    }
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
    </body>
</html>
