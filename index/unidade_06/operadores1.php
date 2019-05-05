<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salario = 800;
            $premio = "800";

            //'==' As variáveis são iguais(valores iguais).
            //'===' As variáveis são idênticas(valores e tipos iguais).

            if($salario === $premio){
                echo "Salário é igual a prêmio";
            }else{
                echo "Salário não é igual a prêmio";
            }
        
        ?>
    </body>
</html>