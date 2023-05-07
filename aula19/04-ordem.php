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
    $v = array(2=>"A",5=>"S",0=>"M",3=>"J",4=>"K");
    print_r($v);
    krsort($v); //sort=valores crescente, r=valores descrescente, a=indices crescente(junto do valor), ar=indices decrescente(junto do valor), k=indices crescente (sozinho), kr=indices decrescente(sozinho)
    print_r($v);
    ?>
    </pre>
    </div>
    </body>
</html>