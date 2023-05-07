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
    //i de indice ; enquanto esse contador for menor ou igual a 10; soma mais um
    for ($i=1; $i<=10; $i++) {
        echo "$i ";
    }
    echo "<br/>";
    //i vai começar com 10 e ate ele parar em 1; vai diminiuir
    for($i=10; $i>=1;$i--) {
        echo "$i ";
    }
    echo "<br/>";
    //a variavel i ta sendo usada quantas vezes quiser pq ela nao esta sendo mais utilizada
    for ($i=0; $i <= 50; $i+=5) {
        echo "$i ";
    }
    echo "<br/>";
    for($i=20; $i>=0; $i-=2) {
        print "$i ";
    }
    ?>
    </div>
    </body>
</html>