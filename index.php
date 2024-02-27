<?php
$persona = [
    "nombre" => "Daniel",
    "edad" => 27
];

$personas = [
    $persona,
    $persona
];

echo json_encode($personas);