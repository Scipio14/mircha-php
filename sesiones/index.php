<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Sesiones con php</title>
	<style>
		form{
			margin:0 auto;
			text-align:center;
			width:400px;
			width:400px;
		}
		span{
			color:#f00;
			font-size:2em;
			font-weight:bold;
		}
		
		
	</style>
</head>
<body>
	<form name="autentificacion_frm" action="control.php" method="post" enctype="application/x-www-form-urlencoded">
		<?php
			error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
			if($_GET["error"]== "si"){
				echo "<span>Verifica tus Datos</span>";
			}else{
				echo "Introduce tus Datos";
				
			}
		?>
		<br/><br/>
		Usuario: <input type="text" name="usuario_txt"/> <br/><br/>
		Password: <input type="password" name="password_txt"/> <br/><br/>
		<input type="submit" name="entrar_btn" value="Entrar"/>
	
	</form>
</body>

</html>