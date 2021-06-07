<?php
$conexion = mysqli_connect("localhost","root","") or die ("No se pudo conectar con el servidor de base de datos");
echo "Conectado al servidor de BD MySQL <br>" ;


//mysqli_selct_db requiere de 2 parámetros exactos. El primero es la conexión y el segundo es el nombre de la base de datos
mysqli_select_db($conexion,"mis_contactos") or die ("No se pudo seleccionar la BD <br>");
echo "BD seleccionada <b>mis_contactos</b><br>";
echo "<h1>Las 4 operaciones b&aacute;sicas a una BD</h1>";
echo "<h2>1)INSERCI&Oacute;N DE DATOS</h2>";

//INSERT INTO nombre_tabla (campos_tabla) VALUES (valores_campos);

$consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES('cacas@scipiomail.com','AMLO','M','1985-06-28','0052155472755','México','cacas.png');";
$result = mysqli_query($conexion,$consulta);
echo "Se han insertado los datos =) <br>";

echo "<h2>2)ELIMINACIÓN DE DATOS</h2>";
//DELETE FROM nombre_tabla WHERE campo = valor;

$consulta = "DELETE FROM contactos WHERE email='jonmircha@scipiomail.com'";
$result =mysqli_query($conexion,$consulta);

echo "Datos eliminados =( <br>";

echo "<h2>3)MODIFICACI&Oacute;N DE DATOS</h2>";
//UPDATE nombre_tabla SET nombre_campo = valor_campo,otro_campo=otro_valor... WHERE campo = valor;

$consulta = "UPDATE contactos SET email='cursos@bextlan.com',nombre='Bextlan', pais='México', imagen='bextlan.png' WHERE email = 'j.mircha@scipiomail.com';";
$result = mysqli_query($conexion,$consulta);
echo "Los datos han sido modificados =) <br>";

echo "<h2>4)CONSULTA (B&Uacute;SQUEDA) DE DATOS </h2>";
// SELECT * FROM nombre_tabla WHERE campo = valor;

$consulta = "SELECT * FROM contactos;";
$result = mysqli_query($conexion,$consulta);

While($registro=mysqli_fetch_array($result)){
  echo $registro["email"] . " --- ";
  echo $registro["nombre"] . " --- ";
  echo $registro["sexo"] . " --- ";
  echo $registro["nacimiento"] . " --- ";
  echo $registro["telefono"] . " --- ";
  echo $registro["pais"] . " --- ";
  echo $registro["imagen"] . " --- ";
  echo "<br>";
}
//Cerrar la conexión
mysqli_close($conexion) or die("Ocurrió un error al cerrar la conexión a la base de datos");
echo "Conexi&oacute;n cerrada";

?>