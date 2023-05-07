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
    $c = 10;
    while ($c >= 0) {
        echo $c . "<br/>";
        $c-=2; //$c = $c - 2;
    }
    ?>
    </div>
    </body>
</html>