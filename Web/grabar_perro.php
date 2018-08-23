<?php

include_once '../Controlador/DaoPerro.php';
include_once '../Modelo/Perro.php';

$nombre=$_POST["txtNombre"];
$raza=$_POST["txtRaza"];
$edad=$_POST["txtEdad"];
$tamano=$_POST["txtTamano"];

$perro=new Perro();

$perro->setNombre($nombre);
$perro->setRaza($raza);
$perro->setEdad($edad);
$perro->setTamano($tamano);

$dao=new DaoPerro();

$filas_afectadas=$dao->Grabar($perro);
if ($filas_afectadas>0) {
    header("location:listar.php");
} else {
    echo 'No Grabo';
}