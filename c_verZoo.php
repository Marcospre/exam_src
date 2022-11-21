<?php

use modelo\ZooModelo;
use modelo\AnimalModelo;
require_once 'modelo/ZooModelo.php';
require_once 'modelo/AnimalModelo.php';

//TODO examen
/*
 * controlador que recibe una id de zoo
 * y muestra la información del zoo 
 * con sus animales.
*/

$id = $_GET['idZoo'];

$con = new ZooModelo();

$zoo = $con->selectById($id);

$con->close();

$con_animal = new AnimalModelo();

$animales = $con_animal->selectAnimalsByZoo($zoo['id']);

$con_animal->close();

require 'vista/zoo.php';



