<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //Uma variável boleana.
            $fumante = true;

            //Colocando '!' antes da variável, é negação(!=)
            //para testar a condição da variável ser 'false'.

            //Quando estiver fazendo comparações com variáveis
            //boleanas, não precisa colocar o "== true" no 'if': 
            //if($fumante == true){
            //if($fumante){
            //if($fumante != false){//Negação desta maneira, ou
            if(!$fumante){//Negação desta maneira.
                echo "Você não é fumante";
            }else{
                echo "Você é fumante";
            }
        
        ?>
    </body>
</html>