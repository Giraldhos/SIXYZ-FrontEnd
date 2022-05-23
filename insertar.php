<?php
include ("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["CC"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$email = $_POST["email"];
$servicio = $_POST["servicio"];

$insertar = "INSERT INTO cliente(nombres, apellidos, cedula, celular, direccion, email,servicio) VALUES  ('$nombre','$apellido','$cedula','$celular','$direccion','$email','$servicio'  )";

$resultado = mysqli_query($conexion, $insertar);

if($resultado) {

    echo"<script> alert('se ha registrado con exito');
    window.location='/TRASLADO_SEGURO'</script>";

}else{
    echo"<script>alert('no se pudo registrar')window.history.go(-1);</script>";
}