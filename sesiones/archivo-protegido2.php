<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br><br>
Est�s en otra p�gina segura
<br><br>
<a href="archivo-protegido.php">Ir a la primera p�gina segura</a> 
<br><br>
<a href="salir.php">SALIR</a>