<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title></title>
    </head>
    <body>
    <div>
    <pre>
    <?php 
        $m = array( array(6,4), //outro vetor, dentro do vetor
                    array(4,9),
                    array(3,2));
        $m[0] [1] = $m [2][0];
        print_r($m);
    ?>
    </pre>
    </div>
    </body>
</html>