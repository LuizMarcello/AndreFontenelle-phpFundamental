<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        //Atribuição de valores a uma variável($maioridade), dependendo de uma condição.
            $idade=18;
            $maioridade = ($idade > 17)? "de maior" : "de menor";

            echo $maioridade;
        
        ?>
    </body>
</html>