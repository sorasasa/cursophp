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
        <table border="1">
    <?php 
        $c = range(5,20,2); //começa em 5, vai ate 20, pulando de 2 em 2
        foreach ($c as $v) { //pra cada $c tratado como valor.../pra cada repetição vai colocar um elemento do vetor $c dentro do $valor
            echo "<td>$v ";
        }
    ?>
        </table>
    </pre>
    </div>
    </body>
</html>