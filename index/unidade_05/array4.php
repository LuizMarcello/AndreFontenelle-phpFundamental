<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = array("Maçã","Abacate","Laranja");
            
            
            if(in_array("Abacate",$salada)){//booleano true ou false.
                echo "Abacate existe neste array </br>.";

            }else{
                echo "Não existe o elemento Abacate existe neste array </br>.";
            }

            echo "Este elemento está na posição " . array_search("Maçã",$salada). "</br>";//retorna a índice onde está localizado o elemento.
            echo "Este elemento está na posição " . array_search("Laranja",$salada);//retorna a índice onde está localizado o elemento.
                
        ?>
    </body>
</html>