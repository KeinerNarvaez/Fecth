<?php
    include('./libreria/numero.php');
    include('./libreria/nominas.php');

    $valorDia=new trabajo(50000);
    $diasTrabajados=new trabajo(5);

    $nominas=new nomina($valorDia,$diasTrabajados);
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
        echo "salario: ". $nominas->salario().'<br>';
        echo "transporte: ". $nominas->transportes().'<br>';
        echo "pago a salud: ". $nominas->salud().'<br>';
        echo "pension: ". $nominas->pension().'<br>';
        echo "deducible: ". $nominas->deducibles().'<br>';
        echo "arl: ". $nominas->arls().'<br>';
        echo "total a pagar: ". $nominas->totalPagar().'<br>';
    ?>
</body>
</html>