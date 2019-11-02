<?php 
require "conexion.php";

$id=$_REQUEST['id'];

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta="UPDATE pokemon SET nombre='$nombre', tipo='$tipo', imagen='$imagen' WHERE id_pokemon='$id'";
$res=$conn->query($consulta);

if($res){
	//echo "si se modifico";
	header("location:index.php");
}
else{
	echo "no se modifico";
}

?>