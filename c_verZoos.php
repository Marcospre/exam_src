<?php

use modelo\ZooModelo;
require_once 'modelo/ZooModelo.php';

//TODO examen
/*
* controlador principal llamado de index.php
* visualiza la lista de los zoos en modo galeria de fotos
* 
*/

$con_zoo = new ZooModelo();

$zoos = $con_zoo->selectAll();



$con_zoo->close();

require 'vista/dashboard.php';

