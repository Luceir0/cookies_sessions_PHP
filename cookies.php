<?php
if (isset($_COOKIE["numero_visitas"])) {
    $visitas = $_COOKIE["numero_visitas"];
} else {
    $visitas = 1;
}

if (isset($_COOKIE["fecha_ultima"])) {
    $ultimavez = $_COOKIE["fecha_ultima"];
} else {
    $ultimavez = time();
}

    setcookie("fecha_ultima", time(), time()+(3600*24*365));
    setcookie("numero_visitas", $visitas+1, time()+(3600*24*365));
    
    //Necesitamos hacer un set, 
    //sea la primera vez o cualquiera de las siguientes que queramos meter un valor en esa variable, 
    //para poder guardar el dato en el navegador del cliente.
    //(Si simplemente le cambiamos el valor a la variable, no lo guardaría).
    
    $currentDate = date('d/m/Y  h:i:s a', $ultimavez);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "Usted visitó esta página la última vez en: ${currentDate}</br>";
            echo "Usted ha visitado esta página ${visitas} veces";
        ?>
    </body>
</html>
