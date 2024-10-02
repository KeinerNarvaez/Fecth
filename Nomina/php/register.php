<?php
    include('lib/operaciones.php');
    include('lib/classOperaciones.php');

    $info = file_get_contents("php://input");
    $dataNumber = json_decode($info, true);
    
    $valorDia = new trabajo($dataNumber['valorDia']);
    $dias = new trabajo($dataNumber['dias']); 
    $operaciones = new nomina($valorDia,$dias);

    $dataOperaciones[] = [
        "salario" => $operaciones->salario(),
        "transporte" => $operaciones->transportes(),
        "salud" => $operaciones->salud(),
        "pension"=>$operaciones->pension(),
        "deducible" => $operaciones->deducibles(),
        "arl" => $operaciones->arls(),
        "totalPagar"=>$operaciones->totalPagar(),
    ];

    header('Content-Type: application/json');
    echo json_encode($dataOperaciones);
?>