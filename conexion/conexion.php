
<?php
$usuario = "USUARIO";
$contrasena = "USUARIO";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "pastebin";


$conexion = mysqli_connect( $servidor, $usuario, "$contrasena" ) or die ("No se ha podido conectar al servidor de Base de datos");

	
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = 'select * from USERS';
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

echo $db;
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

echo "<table borde='2'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>PRIVILEGIOS</th>";
echo "</tr>";
while ($columna = mysqli_fetch_array( $resultado ))
{
	echo "<tr>";
	echo "<td>" . $columna['ALIAS'] . "</td><td>" . $columna['PRIVILEGES'] . "</td>";
	echo "</tr>";
}
echo "</table>"
?>

