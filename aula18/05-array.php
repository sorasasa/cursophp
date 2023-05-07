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
    $v = array( "nome" => "Ana",
                "idade" => 23,
                "peso" => 65.5);
    //print_r($v);
        foreach($v as $k => $c) {
           echo "O campo $k possui o conteudo $c <br/>";
       }

    ?>
    </pre>
    </div>
    </body>
</html>