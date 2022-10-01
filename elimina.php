<?php 
if (isset($_REQUEST['usr']))
{
	$usr=$_REQUEST['usr'];
	$cnx =  mysqli_connect("localhost","root","","empresa") or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	$result = mysqli_query($cnx,"select usr from tbl_usuario where usr = '$usr'");
	if (mysqli_num_rows($result)>0)
	{
		mysqli_query($cnx,"DELETE FROM tbl_usuario WHERE usr = '$usr'");	
	}
	else
	{
		echo "Usuario No existe....";
	}
	mysqli_close($cnx);
}
else
{
	echo "Debe especificar usr";
}
?>
