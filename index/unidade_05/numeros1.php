<?php 
    $salario = 2400;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre: " . $salario * $meses . "</br>";
            echo "Quinzena: " . $salario  /2 . "</br>";

            // Exponencial
            echo "Exponencial: " . pow(8,2) . "</br>";
            echo "Exponencial: " . pow(6,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "</br>";
            echo "Raiz Quadrada: " . sqrt(216) . "</br>";

            // Randômico Generico
            echo "Randômico Genérico: " . rand() . "</br>";

            // Randômico no intervalo:
            echo "Randômico no intervalo de 1 a 20:  " . rand(1,20) . "</br>";

            // Valor absoluto(valor inteiro sem ser negativo):
            echo "Absoluto: " . abs(-10) . "</br>";
            echo "Absoluto: " . abs(-210) . "</br>";
            
        ?>
    </body>
</html>
