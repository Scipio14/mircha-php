<?php
//Pasos para conectarme a una BD MySQL
// 1) Conectarle al BD, mysqli_connect() necesita 4 datos:
//  1)Servidor
//  2)Usuario de la BD
//  3)Password del usuario de la BD
//  4) Nombre de la base de datos
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mis_contactos";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("No se pudo conectar con el servidor de BD");
echo "Estoy conectado a MySQL <br>"


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

//3) Crear una consulta SQL
 $query = "SELECT * FROM pais;";

 //4) Ejecutar la consulta SQL
 //mysqli_query necesita 2 parámetros:
 // 1)La consulta
 // 2) La conexión a la BD
  $result = mysqli_query($conn,$query) or die ("No se pudo ejecutar la consulta en la BD");
  echo "Se ejecutó la consulta SQL <br>";
  $resultCheck = mysqli_num_rows($result);
  //echo $resultCheck;

  if($resultCheck > 0){
    //5) Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la función mysqli_fetch_assoc()
    while($row = mysqli_fetch_assoc($result)){
      echo $row['id_pais'] . " - " . $row['pais'] . "<br/>";

    }
   
  }
 //6) Cerrar la conexion a la bd
    mysqli_close($conn) or die("Ocurrió un error al cerrar la conexión a la base de datos");
    echo "conexión cerrada";

?>
  
</body>
</html>