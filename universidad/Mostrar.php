
<?php
$pdo = new PDO('mysql:host=localhost;dbname=universidad','root','');

// Consulta De La BASE DE DATOS
$consulta=$pdo->prepare("SELECT * FROM datos");
$consulta->execute();

if ($consulta->rowCount()>=1)
{
	while ($fila=$consulta->fetch()) {

		echo "
		<tr class='table-light'>
		<th>".$fila['nombre']."</th>
        <th>".$fila['apellidos']."</th>
        <th>".$fila['edad']."</th>
        <th>".$fila['sexo']."</th>
        <th>".$fila['carnet']."</th>
		<td><a href='VerActualizado.php?id=".$fila['nombre']."' class='fas fa-pencil-alt  btn btn-success'>Actualizar</a> </td>
		<td><a href='eliminar.php?id=".$fila['nombre']."' class='fas fa-trash  btn btn-danger'>Eliminar</a> </td>
		</tr>";
	}//fin de while
}// in del if


?>