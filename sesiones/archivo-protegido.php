<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br><br>
Estás es una p&aacute;gina segura con sesiones en PHP
<br><br>
<a href="archivo-protegido2.php">Ir a otra página segura</a> 
<br><br>
<a href="salir.php">SALIR</a>