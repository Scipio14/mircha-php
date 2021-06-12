<?php 
//Asigno a variables de php los valores que vienen del formulario
$email = $_POST["email_txt"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];
//Dependiendo del sexo ponemos una imagen predeterminada
$imagen_generica = ($sexo=="M") ? "img/fotos/amigo.png" : "img/fotos/amiga.png";

//verificamos que no exista previamente el email del usuario en la base de datos
include("conexion.php");
$consulta ="SELECT * FROM contactos WHERE email='$email';";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs=$ejecutar_consulta->num_rows;
//Si $num_regs es igual a 0, insertamos los datos en la tabla, si no mandamos un mensaje que diga que el usuario existe

if($num_regs == 0){
  //Se ejecuta la función para subir la imagen
  include("funciones.php");
  $tipo = $_FILES["foto_fls"]["type"];
  $archivo = $_FILES["foto_fls"]["tmp_name"];
  $se_subio_imagen = subir_imagen($tipo,$archivo,$email);

  //Si la foto viene vacía le asigno el valor de la imagen genérica, sino el nombre de la foto que se subió

  $imagen = empty($archivo)? $imagen_generica :$se_subio_imagen;

  $consulta = "INSERT INTO contactos (email,nombre,sexo,nacimiento,telefono,pais,imagen) VALUES ('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen');";
 $ejecutar_consulta = $conexion->query($consulta);

  if($ejecutar_consulta){
    $mensaje = "Se ha dado de alta al contacto con el email: <b>$email</b> :)";
  }else{
    $mensaje = "No se pudo dar de alta al contacto con el email: <b>$email</b> :(";

  }
  

}else{
  $mensaje = "No se pudo dar de alta al contacto con el email <br>$email </b> porque ya existe :/";
}
$conexion->close();
header("Location: ../index.php?op=alta&mensaje=$mensaje");

?>