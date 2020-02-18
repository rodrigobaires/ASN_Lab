<?php


$pdo = new PDO('mysql:host=localhost;dbname=universidad','root','');
$id= $_GET['id'];

// Consulta De La BASE DE DATOS
$consulta=$pdo->prepare("DELETE FROM datos WHERE  nombre = ? ");
$consulta->execute(array($id));

header("location: VerAlumno.php");



?>