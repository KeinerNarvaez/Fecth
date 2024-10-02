<?php
    include('./libreria/procesos.php');
    $suma = new suma();
    $resta=new resta();
    $dividir=new dividir();
    $multiplicar= new multiplicar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesos</title>
</head>
<body>
    <?php
        echo  $suma -> sumado(1,2) ."<br>";
        echo $resta -> restando(1,2)."<br>";
        echo $dividir -> dividiendo(1,2)."<br>";
        echo $multiplicar -> multiplicando(1,2);
    ?>
</body>
</html>