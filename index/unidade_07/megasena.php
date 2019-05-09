<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <?php
    $megasena = array();
    $cont = 1;

    while ($cont < 7) {
        $sorteio = rand(1, 60);
        //Função nativa php para checar se
        //um valor já existe no array:
        if (!in_array($sorteio, $megasena)) {
            //Assim sempre adicionará no final do array
            $megasena[] = $sorteio;
            $cont++;
        }
    }
    sort($megasena);
    ?>

    <pre>
            <?php print_r($megasena) ?>
        </pre>

</body>

</html>