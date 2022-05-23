<?php
include("conexion.php");
$cliente = "SELECT * FROM cliente";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="tabla.css">
<table class="table">
  <thead>
  <?php $resultado = mysqli_query($conexion, $cliente);
                    while($row=mysqli_fetch_assoc($resultado)) {  ?>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">cedula</th>
      <th scope="col">celular</th>
      <th scope="col">direccion</th>
      <th scope="col">email</th>
      <th scope="col">servicio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row["nombres"]; ?></th>
      <td><?php echo $row["apellidos"]; ?></td>
      <td><?php echo $row["cedula"]; ?></td>
      <td><?php echo $row["celular"]; ?> </td>
      <td><?php echo $row["direccion"]; ?> </td>
      <td><?php echo $row["email"]; ?> </td>
      <th><?php echo $row["servicio"]; ?> </th>
    </tr>
    
    <?php } mysqli_free_result($resultado);?>
  
       
       
     
</table>
<div class="d-grid gap-2" >
                                <a type="button" class="btn btn-outline-success" href="index.html">volver a menu</a> 
                                
                            </div>

</body>
</html>