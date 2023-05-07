<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title></title>
    </head>
    <body>
    <div>
    <?php 
    $n = isset($_GET["num"]) ? $_GET["num"] : 1;
    for ($c=1; $c<=10; $c++) {
        $r = $n * $c; //resultado vai ser o numero q o usuario escolheu * o $c q é o contador atual
        echo "$n x $c = $r <br/>"; //3 x 1 = 3 exemplo
    }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
    </div>
    </body>
</html>