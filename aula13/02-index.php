<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title>tabuada</title>
    </head>
    <body>
    <div>
   <form method="get" action="02-tabuada.php">
    <select name="num">
    <?php 
     for ($c=1; $c<=10; $c++) { //de 1 ate 10 vai somando mais 1 
        echo "<option>$c</option>"; //vai mostra o numero da opção
     }
    ?> <!--o index foi salvo em php pra poder ter o php dentro-->
    </select>
    <input type="submit" class="botao" value="Tabuada"/>
   </form>
    </div>
    </body>
</html>