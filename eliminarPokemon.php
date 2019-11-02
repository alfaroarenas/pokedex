<?php 

include_once "conexion.php";

$id=$_REQUEST['id'];

$consulta="DELETE FROM pokemon WHERE id_pokemon='$id'";
$res=$conn->query($consulta);

if($res){
	//echo "si se elimino";
	header("location:index.php");
}
else{
	echo "no se elimino";
}


?>