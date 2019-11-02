<?php

echo"hola estoy agregando pokemon a la base de datos";

require "conexion.php";

if ($conn->connect_error) {
    die("Falla en la conexion...<br> " . $conn->connect_error);
}

$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$consulta="INSERT INTO pokemon (nombre,tipo,imagen) VALUES('$nombre','$tipo','$imagen')";
$res=$conn->query($consulta);

if($res){
	//echo"si se agrego";
	header("location:index.php");
}
else{
	echo "no se agrego";
}

?>

