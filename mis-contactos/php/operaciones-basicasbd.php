<?php
$conexion = mysqli_connect("localhost","root","") or die ("No se pudo conectar con el servidor de base de datos");
echo "Conectado al servidor de BD MySQL <br>" ;


//mysqli_selct_db requiere de 2 parámetros exactos. El primero es la conexión y el segundo es el nombre de la base de datos
mysqli_select_db($conexion,"mis_contactos") or die ("No se pudo seleccionar la BD <br>");
echo "BD seleccionada <b>mis_contactos</b><br>";
echo "<h1>Las 4 operaciones b&aacute;sicas a una BD</h1>";
echo "<h2>1)INSERCI&Oacute;N DE DATOS</h2>";

//INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos);

$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES('scipio14@scipiomail.com','Scipio','M','1985-06-28','0052155472755','Italia','scipio.png');";
$result = mysqli_query($conexion,$consulta);
echo "Se han insertado los datos =) <br>";

echo "<h2>2)ELIMINACIÓN DE DATOS</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor;

$consulta = "DELETE FROM contactos WHERE email='scipio14@scipiomail.com'";
$result =mysqli_query($conexion,$consulta);

echo "Datos eliminados =( <br>";
?>