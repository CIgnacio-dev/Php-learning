<?php
include ('conexion.php');
/* $consulta = "INSERT INTO registros(rut, nombre, apellido, email, contraseña) VALUES
('15342320K', 'Favio', 'Ruiz', 'p.ruiz@gmail.com', 'FR2016')";
$ejecutar = mysql_query($consulta,$conexion) or die ('Error al insertar datos');
echo "Se insertaron los datos correctamente"; */
/* $consulta = "UPDATE registros SET
nombre = 'Pablo',
contraseña = 'PR2016',
email = 'p.ruiz@gmail.com' WHERE rut ='15342320K'";
$ejecutar = mysql_query($consulta,$conexion) or die ('Datos no encontrados');
echo "Se han modificado los datos correctamente"; */
/* $consulta = "DELETE FROM registros WHERE rut = '15342320K'";
$ejecutar = mysql_query($consulta,$conexion) or die ('Datos no encontrados');
echo "Se eliminaron los datos correctamente"; */
$consulta = "SELECT * FROM registros"; //
$ejecutar = mysql_query($consulta,$conexion) or die ("No se pudo realizar la consulta </br>");
echo "Consulta exitosa </br>";
while($registro = mysql_fetch_array($ejecutar)){
    echo $registro ["rut"]." -
    ".$registro["nombre"]." -
    ".$registro["apellido"]." -
    ".$registro["email"].'</br>';
}

?>