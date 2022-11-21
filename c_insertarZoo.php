<?php
use modelo\ZooModelo;

require_once 'modelo/ZooModelo.php';

//TODO examen
/*
 * controlador que inserta los datos
 * del zoo recibidos por post.
 * y abre:
 *  opcion 1: la pantalla del zoo que acabamos de insertar VER_ZOO
 *  opcion 2: el panel principal donde aparecen todos los zoos 
 */

$zoo = [
    "ciudad" => $_POST['ciudad'],
    "nombre" => $_POST['nombre'],
    "direccion" => $_POST['direccion'],
    "pais" => $_POST['pais'],
    "descripcion" => $_POST['descripcion'],
    "foto" => $_POST['foto']
];

$con = new ZooModelo();

$con->insert($zoo);

$con->close();

header("Location: c_verZoos.php");



