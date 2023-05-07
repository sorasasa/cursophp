<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../_css/estilo.css"/>
    <title></title>
    </head>
    <body>
    <div>
    <form method="get" action="03-parte2.php">
<!-- fazer um contador com Incio(qualquer numero digitado) Final(final da contagem) e Incremento (Select(de quanto em quanto vai pular ate chegar no resultado)) e um input(botao) p contar na proxima pagina tem q indentificar se é crescente ou decrescente-->
    Inicio:<input type="number" min="0" name="in"/> <br/>
    Final:<input type="number" name="fi"/>
    Incremento:<select>
        <?php 
        for ($co=1;$co<=5;$co++)
        echo "<option>$co</option>";
        ?>
    </select>
    </form>
    </div>
    </body>
</html>