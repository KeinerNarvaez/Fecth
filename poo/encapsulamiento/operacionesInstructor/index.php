<?php
    include('./libreria/numero.php');
    include('./libreria/operaciones.php');

    $numeroUno=new Numero(10);
    $numeroDos=new Numero(5);

     $operaciones=new operaciones($numeroUno,$numeroDos);
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
        echo "suma: ". $operaciones->sumar().'<br>';
        echo "resta: ". $operaciones->restar().'<br>';
        echo "multiplicacion: ". $operaciones->multiplicar().'<br>';
        echo "division: ". $operaciones->dividir().'<br>';
    ?>
</body>
</html>