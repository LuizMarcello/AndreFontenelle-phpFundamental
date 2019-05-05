<?php
$nome = null;
//$nome = "luiz";
$endereco = "";
//Uma variável que não recebeu ainda nenhum
//valor, não é considerada nula.
//É somente vazia.
$endereco2 = "Rua geral";

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "A variável é null ? " . is_null($nome) . "</br>";
            echo "A variável é null ? " . is_null($endereco) . "</br>";

            echo "A variável é null ? " . is_null($endereco2) . "</br>";

            echo "A variável está vazia ? " . empty($nome) . "</br>";
            echo "A variável está vazia ? " . empty($endereco) . "</br>";

            echo "A variável está vazia ? " . empty($endereco2) . "</br>";
            
            //Variável 'null' é nula e vazia
            //Variável 'vazia' é só vazia, não é nula.
        ?>
    </body>
</html>