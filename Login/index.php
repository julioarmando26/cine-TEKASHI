<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: login.html");

    exit;

}

?>
<!DOCTYPE html>

<html lang="es">

	<head>

		<meta charset="UTF-8">

		<title>Bienvenido</title>  

	</head>

	<body>

		<h1>Hola, <b><?php echo htmlspecialchars($_SESSION["usuario"]); ?></b>. Has ingresado al sitio.</h1>

		   

		<p>

			<a href="logout.php">Cerrar sesión</a><br>

			<a href="reset-password.php" >Cambiar contraseña</a>

		</p>

	</body>

</html>

