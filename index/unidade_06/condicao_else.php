<?php
$a = 2;
$b = 1;

?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

<?php
    if($a > $b){
        echo "A é maior do que B";
    }else if($a < $b){
        echo "B é maior do que A";
    }else{
        echo "A e B são iguais";
    }

?>

    </body>
</html>