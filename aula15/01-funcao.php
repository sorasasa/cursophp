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
    function teste(&$x) {
        $x += 2;
        echo "O valor de X é $x <br/>";
    }
        $a = 3;
        teste($a);
        echo "O valor de A é $a <br/>";
    ?>
    </div>
    </body>
</html>