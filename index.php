<?php
// Agregamos los objetos
$person1 = [
    "nombre" => "Persona 1",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
    // Puedes agregar más atributos aquí
];

$person2 = [
    "nombre" => "Persona 2",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
    // Puedes agregar más atributos aquí
];

$person3 = [
    "nombre" => "Persona 3",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
    // Puedes agregar más atributos aquí
];

$person4 = [
    "nombre" => "Persona 4",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
    // Puedes agregar más atributos aquí
];

// Creamos una lista de objetos en un arreglo
$people = [
    $person1,
    $person2,
    $person3,
    $person4
];

// Creamos un arreglo de objetos relacionados por nombre
$people_by_name = [];

// Recorremos el arreglo de people una persona a la vez
foreach ($people as $person) {
    // Creamos pares de llave valor con el nombre como llave y la persona como valor
    $people_by_name[$person["nombre"]] = $person;
}

// Revisamos si el argumento nombre está definido en el URL
if (isset($_GET["nombre"])) {
    // Asignamos el valor del argumento GET a una variable llamada name
    $name = $_GET["nombre"];
    // Imprimir una sola persona que coincida con el nombre
    echo json_encode($people_by_name[$name]);
} else {
    // Imprimir la lista completa de personas
    echo json_encode($people);
}