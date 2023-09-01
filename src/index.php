<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <?php
        //echo "";
        echo "<h1>Fichas de RPG</h1>";
        echo "No código abaixo, foi criado um código PHP para organizar as fichas dos meus personagens.";
        echo "<hr>";
        include_once "fichasDND.php";
        echo "<hr><br>";
        include_once "fichasAOP.php";
    ?>
</body>
</html>