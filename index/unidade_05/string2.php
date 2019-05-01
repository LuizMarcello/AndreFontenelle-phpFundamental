<?php 
    $_nome = "Curso PHP Fundamental - Curso - Curso";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna primeira ocorrencia
            echo strlen($_nome) . "</br>";
            echo strlen("Brasil") . "</br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_nome,"c") . "</br>";
            echo stripos($_nome,"u") . "</br>";
            echo stripos($_nome,"d") . "</br>";

            // strripos - Retorna última ocorrência
            echo strripos($_nome,"u") . "</br>";
            echo strripos($_nome,"d") . "</br>";
            
            
            // strtolower - converte para letras min.
            echo strtolower($_nome) . "</br>";

            // strtoupper - converte para letras min.
            echo strtoupper($_nome) . "</br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo substr_count($_nome,"C") . "</br>";
            echo substr_count($_nome,"u") . "</br>";
            echo substr_count($_nome,"Curso") . "</br>";
        ?>
        
        
    </body>
</html>