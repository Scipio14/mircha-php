<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br><br>
Est�s es una p&aacute;gina segura con sesiones en PHP
<br><br>
<a href="archivo-protegido2.php">Ir a otra p�gina segura</a> 
<br><br>
<a href="salir.php">SALIR</a>