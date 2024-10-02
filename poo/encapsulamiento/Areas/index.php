<?php
    include('./libreria/numero.php');
    include('./libreria/operaciones.php');

    $altura=new Lado(10);
    $base=new Lado(5);
    $lado=new Lado(20);

    $operaciones=new Areas($altura,$base,$lado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "area de cuadrado : ". $operaciones->areaCuadrado().'<br>';
        echo "area de triangulo: ". $operaciones->areaTriangulo().'<br>';
        echo "area de rectangulo: ". $operaciones->areaRectangulo().'<br>';
    ?>
</body>
</html>