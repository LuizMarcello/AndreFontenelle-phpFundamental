<?php

$fumante = false;

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php
        
        if($fumante){
            echo "É fumante.";
        }else{
            echo "Não é fumante </br>";
        }

        echo is_bool($fumante);//Se é boleana.
        ?>
        
    </body>
</html>