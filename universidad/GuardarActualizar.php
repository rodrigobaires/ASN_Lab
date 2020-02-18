<?php

$pdo = new PDO('mysql:host=localhost;dbname=universidad','root','');

if (isset($_POST['Registrar'])) 
{

    $nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$dui = $_POST['dui'];
	$nit = $_POST['nit'];
	$carnet = $_POST['carnet'];
    $direccion = $_POST['direccion'];

    $id = $_POST['idcodigo'];
    
    $consulta=$pdo->prepare("UPDATE datos SET nombre=:nombre , apellidos=:apellidos, edad = :edad , sexo = :sexo , telefono	 = :telefono , email=:email , direccion= :direccion , dui = :dui , nit	= :nit	, carnet =:carnet	 WHERE nombre =:id");
    $consulta->bindParam(":nombre", $nombre);
    $consulta->bindParam("apellidos",$apellidos );
    $consulta->bindParam(":edad",$edad ); 
    $consulta->bindParam(":sexo",$sexo ); 
    $consulta->bindParam(":telefono",$telefono ); 
    $consulta->bindParam(":direccion",  $direccion); 
    $consulta->bindParam(":email", $email); 
    $consulta->bindParam(":direccion",$direccion ); 
    $consulta->bindParam(":dui",$dui ); 
    $consulta->bindParam(":nit",$nit ); 
    $consulta->bindParam(":carnet",$carnet ); 
    
    
    $consulta->bindParam(":id",$id ); 

    //Verifica si ha insertado los datos
	if ($consulta->execute()) 
	{
				//Si todo fue correcto muestra el resultado con exito;
		
		header("Location: VerAlumno.php");
	}
	else
	{   echo "Fallo";
	
	}



}

?>