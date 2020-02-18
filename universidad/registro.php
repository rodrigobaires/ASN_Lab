<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=universidad','root','');

	if(isset($_POST["Registrar"])){
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
	


	$consulta=$pdo->prepare("INSERT INTO datos(nombre,apellidos,edad,sexo,telefono,email,direccion,dui,nit,carnet) VALUES (?,?,?,?,?,?,?,?,?,?)");
	$consulta->execute(array($nombre, $apellidos, $edad, $sexo,$telefono,$email,$direccion,$dui,$nit,$carnet));
	
		if($consulta->rowCount()){
			echo "Agregado";
		}else{
			echo "No se pudo agregar";
		}
}

	
?>