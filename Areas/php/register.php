<?php
    include('lib/operaciones.php');
    include('lib/classOperaciones.php');

    $info = file_get_contents("php://input");
    $dataNumber = json_decode($info, true);
    
    $cuadrado = new Lado($dataNumber['cuadrado']);
    $taltura = new Lado($dataNumber['triangulos1']); 
    $tbase = new Lado($dataNumber['triangulos2']);    
    $raltura = new Lado($dataNumber['rectangulo1']);
    $rbase = new Lado($dataNumber['rectangulo2']);
    $operaciones = new Areas($taltura,$tbase,$raltura,$rbase,$cuadrado);

    $dataOperaciones[] = [
        "cuadrado" => $operaciones->areaCuadrado(),
        "triangulo" => $operaciones->areaTriangulo(),
        "rectangulo" => $operaciones->areaRectangulo(),
    ];

    header('Content-Type: application/json');
    echo json_encode($dataOperaciones);

?>