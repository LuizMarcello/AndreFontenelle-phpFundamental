<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        //Criando um array associativo("campo/atributo"=>"valor")
                     $agenda = array(
                "Nome" => "José",
                "Sobrenome" => "Silva",
                "Salario" => 1000,
                "Aniversario" => "03/08/1990"
            );

            //Foreach associativo:
            foreach($agenda as $atributo => $valor){
                echo $atributo . ": " . $valor . "<br>";
            }
            
        
        ?>
    </body>
</html>