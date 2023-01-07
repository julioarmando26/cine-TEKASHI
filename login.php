<?php

session_start();


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

  header("location: Login/index.php");

  exit;

}


require_once "Login/config.php";

 

// Definir variables e inicializar con valores vacíos

$usuario = $contraseña = $username_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){

 

    // Comprobar si el nombre de usuario está vacío

    if(empty(trim($_POST["usuario"]))){

        $username_err = "Por favor ingrese su usuario.";

    } else{

        $usuario = trim($_POST["usuario"]);

    }


    if(empty(trim($_POST["contraseña"]))){

        $password_err = "Por favor ingrese su contraseña.";

    } else{

        $contraseña = trim($_POST["contraseña"]);

    }

    


    if(empty($username_err) && empty($password_err)){


        $sql = "SELECT id, usuario, contraseña FROM usuarios WHERE usuario = ?";

        

        if($stmt = mysqli_prepare($link, $sql)){

          

            mysqli_stmt_bind_param($stmt, "s", $param_username);

    

            $param_username = $usuario;

            

  

            if(mysqli_stmt_execute($stmt)){



                mysqli_stmt_store_result($stmt);


                if(mysqli_stmt_num_rows($stmt) == 1){                    



                    mysqli_stmt_bind_result($stmt, $id, $usuario, $hashed_contraseña);



                    if(mysqli_stmt_fetch($stmt)){



                        if(password_verify($contraseña, $hashed_contraseña)){


                            session_start();


                            $_SESSION["loggedin"] = true;

                            $_SESSION["id"] = $id;

                            $_SESSION["usuario"] = $usuario;                            

                            

                            // Redirigir al usuario a la página de inicio

                            header("location: Login/index.php");

                        } else{

                            // Mostrar un mensaje de error si la contraseña no es válida

                            $password_err = "La contraseña que ha ingresado no es válida.";

                        }

                    }

                } else{

                    // Mostrar un mensaje de error si el nombre de usuario no existe

                    $username_err = "No existe cuenta registrada con ese nombre de usuario.";

                }

            } else{

                echo "Algo salió mal, por favor vuelve a intentarlo.";

            }

        }

 

        mysqli_stmt_close($stmt);

    }


    mysqli_close($link);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet</title>
    <link rel="shortcut icon" href="img/logoCTK.png">
    <style>
        a{
          color: white;
          background-color: black;
          padding: 5px 10px;
          text-decoration:  none;
          border-radius: 5px;
        }
      </style>
</head>
<body  background="img/fondo.jpg">
    <header>
        <h1>CineTettaKisaki&copy;</h1>
        <a href="inicio.html">Inicio</a>&nbsp;
        <a href="nosotros.html">Sobre Nosotros</a>&nbsp;
        <a href="comidas_bebidas/index.php">Comidas y Bebidas</a>&nbsp;
        <a href="reserva.php">Reserva de boletos</a>&nbsp;
        <a href="login.php">Intranet</a>&nbsp;
        <a href="equipo.html">Equipo</a>&nbsp;
    </header>
    <!-- Cuerpo de la pagina -->
    <h1><center>Iniciar Sesión</center></h1>
    <br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p align="center">Usuario: <input type="text" name="usuario" value="<?php echo $usuario; ?>" required></p>
        <br>
        <span ><?php echo $username_err; ?></span><br>
        <p align="center">Contraseña: <input type="password" name="contraseña" value=" <?php echo $usuario; ?>"id="" required></p>
        <br>
        <span ><?php echo $password_err; ?></span><br>
        <center><input type="submit"  value="Ingresar"><br></center>
        <p align="center"><a href="registro.php" >Crear Cuenta</a>&nbsp;
        <a href="reset-password.php" >¿Olvidaste tu contraseña?</a></p> 
    </form>
    <br>
    <footer>
        <table>
            <tr>
                <td>Cine Tetta Kisaki&copy;</td>
                <td>Direccion: Calle las Vegas, Cercado de Lima, Perú <br>Cel: 923298140</td>
                <td>Desarrollado por el GRUPO 1&copy;</td>
            </tr>
        </table>
    </footer>
    
</body>
</html>