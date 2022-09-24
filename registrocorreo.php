<?php 
$usr = $_REQUEST['usr'];
$clave = $_REQUEST['clave'];
$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$cnx =  mysqli_connect("localhost","root","","empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
$result = mysqli_query($cnx,"select correo from tbl_usuario where correo = '$correo'");
if (mysqli_num_rows($result)==0)
{
	mysqli_query($cnx,"INSERT INTO usuario (usr,nombre,correo,clave) VALUES ('$usr','$nombre','$correo','$clave')");	
}
else
{
	echo "Correo ya existe....";
}
mysqli_close($cnx);
 ?>
