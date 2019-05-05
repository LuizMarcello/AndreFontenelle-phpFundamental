<?php
$nome = null;
$endereco = "Rua Brasil";
$telefone = "";


?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //isset(): Se avariável está setada/configurada/iniciada/definida, se ela existe e não é nula.
            if(isset($nome)){
                echo "Variável nome está setada/configurada/iniciada e não é nula. </br>";
            }else{
                echo "Variável nome não está setada/configurada/iniciada. </br>"; 
            }

            if(isset($endereco)){
                echo "Variável endereço está setada/configurada/iniciada e não é nula. </br>";
            }else{
                echo "Variável endereço não está setada/configurada/iniciada. </br>"; 
            }

            if(isset($telefone)){
                echo "Variável telefone está setada/configurada/iniciada e não é nula. </br>";
            }else{
                echo "Variável telefone não está setada/configurada/iniciada. </br>"; 
            }

            //Para 'isset()' retornar 'true', pode ser vazia.
            //Não pode ser 'nula'.
            //Se a variável não existir, retorna 'false' também.
        ?>
    </body>
</html>


