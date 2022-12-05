<?php
$con=mysqli_connect('localhost','root','','formulario') or die ('error en la conexion del servidor');
$sql="INSERT INTO datos VALUES(null,'".$_POST["primer_nombre"]."','".$_POST["segundo_nombre"]."','".$_POST["primer_apellido"]."','".$_POST["segundo_apellido"]."','".$_POST["edad"]."', '".$_POST["ciudad"]."')";
$resultado=mysqli_query($con,$sql) or die ('error en el query base');
mysqli_close(&con);
?>


