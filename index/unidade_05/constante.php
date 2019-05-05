<?php
//define(): Função interna do php para criar constantes.
//O nome para a constante a ser criada é sem '$':
//O valor de uma constante que foi atribuido na criação 
//da mesma, não pode ser alterado posteriormente.
define("MESES", 12);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <?php
        echo "Quantidade de meses no ano é ". MESES;
    
    ?>
    </body>
</html>