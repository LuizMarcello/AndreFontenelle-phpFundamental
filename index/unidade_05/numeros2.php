<?php
    $salario = 800;
    $gasolina = 2.792341;
    $gasolina2 = 2.49;
    $gasolina3 = 2.99;
    $gasolina4 = 2.29;
    $nome = "André";
    
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O " . $salario . " é um número ? " . is_numeric($salario) . "</br>";
            echo "O $gasolina é um número ? " . is_numeric($gasolina) . "</br>";
            echo "O $nome é um número ? " . is_numeric($nome) . "</br></br>";

            // testar se é inteiro
            echo "O " . $salario . " é um número inteiro ? " . is_int($salario) . "</br>";
            echo "O $gasolina é um número inteiro ? " . is_int($gasolina) . "</br></br>";

            // testar se é float
            echo "O " . $salario . " é um número float ? " . is_float($salario) . "</br>";
            echo "O $gasolina é um número float ? " . is_float($gasolina) . "</br></br>";

            echo round($gasolina) . "</br>";
            echo round($gasolina2) . "</br>";
            echo floor($gasolina3) . "</br>";//chão
            echo ceil($gasolina4) . "</br>";//teto
        ?>
        
        
    </body>
</html>
