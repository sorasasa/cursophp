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
    function soma ($a,$b) {
        return $a + $b;
       // $s = $a + $b ;
       //return $s;
    }
    $x = 3;
    $y = 4;
    $r = soma($x,$y);
    echo "A soma entre $x e $y é igual a $r";
    ?>
    </div>
    </body>
</html>