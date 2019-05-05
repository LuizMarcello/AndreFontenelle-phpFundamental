<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $a=5;
            $b=3;

            if($a > $b) {
                //As chaves fazem com que tudo que está no bloco seja avaliado no 'if',
                //sem as chaves, da 2ª linha em diante não seriam avaliados,
                //apareceriam de qualquer jeito
                echo "A é maior do que B </br>";
                echo "Va para a pagina de clientes </br>";
            }

            echo "</br>";

            $fumante = true;
            
            //Colocando '!' antes da variável, é negação,
            //para testar a condição da variável ser 'false'.
            if(!$fumante){
                echo "Não poderá entrar";
            }
            
        
        ?>
    </body>
</html>