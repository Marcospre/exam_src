<?php

use modelo\AnimalModelo;
require 'modelo/AnimalModelo.php';

$animal = [
    "nombre" => $_POST['nombre'],
    "foto" => $_POST['foto'],
    "nombre_cientifico" => $_POST['nombre_cientifico'],
    "descripcion" => $_POST['descripcion'],
    "zoo_id" => $_GET['zoo_id']
];


$con = New AnimalModelo();

$con->insert($animal);

$con->close();

header("Location:c_verZoo.php?zoo_id=".$_GET['zoo_id']."");

?>