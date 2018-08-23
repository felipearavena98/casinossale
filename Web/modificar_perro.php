<?php

include_once '../controlador/DaoPerro.php';
include_once '../modelo/Perro.php';

$id=$_POST["txtId"];
$nombre=$_POST["txtNombre"];
$raza=$_POST["txtRaza"];
$edad=$_POST["txtEdad"];
$tamano=$_POST["txtTamano"];

$perro=new Perro();

$perro->setId($id);
$perro->setNombre($nombre);
$perro->setRaza($raza);
$perro->setEdad($edad);
$perro->setTamano($tamano);

$dao=new DaoPerro();
$filas_afectadas=$dao->Modificar($perro);
if ($filas_afectadas>0) {
    header("location:listar.php");
} else {
    echo 'No modificó';
}