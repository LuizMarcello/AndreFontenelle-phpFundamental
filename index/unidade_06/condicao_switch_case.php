<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia="sabado";

            switch ($dia) {
                case 'segunda':
                       echo "Hoje é segunda. </br>";
                    break;
                    case 'quarta':
                    echo "Hoje é quarta. </br>";
                    break;
                    case 'sexta':
                    echo "Hoje é \0/ sexta. </br>";
                    break;
                default:
                    # code...
                    echo "Não é nenhum destes dias";
                    break;
            }
        
        ?>
    </body>
</html>