<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br><br>
Estás en otra página segura
<br><br>
<a href="archivo-protegido.php">Ir a la primera página segura</a> 
<br><br>
<a href="salir.php">SALIR</a>