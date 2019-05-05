<?php
    $lost = array(23,15,16,8,42,4);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo max($lost) . "</br>";//maior
            echo min($lost) . "</br>";//menor
            echo array_sum($lost). "</br>";//soma de todos
            sort($lost);//colocando em ordem crescente
        
        ?>

        <pre>
            <?php
            echo print_r($lost) . "</br>";
            rsort($lost);//colocando em ordem decrescente
            echo print_r($lost) . "</br>";
            shuffle($lost);//Embaralhando todo o array.
            echo print_r($lost);
            ?>
        </pre>
    </body>
</html>
