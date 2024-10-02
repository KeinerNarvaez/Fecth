<?php
    include('./libreria/procesos.php');
    $operaciones=new operaciones();
    $operaciones->setsumando(2,2);
    $operaciones->setresta(2,2);
    $operaciones->setdivision(2,2);
    $operaciones->setmultiplicacion(5,6)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
        echo  "suma: " .$operaciones-> getsumando();
        echo  "resta: " .$operaciones-> getresta();
        echo  "multiplicacion: " .$operaciones-> getmultiplicacion();
        echo "division: ". $operaciones->getmultiplicacion();
    ?>
</body>
</html>