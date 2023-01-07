<?php


require_once "Login/config.php";


$usuario = $contraseña = $confirm_password = "";

$username_err = $password_err = $confirm_password_err = "";

 

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["usuario"]))){

        $username_err = "Por favor ingrese un usuario.";

    } else{

        // Preparar la consulta

        $sql = "SELECT id FROM usuarios WHERE usuario = ?";

        

        if($stmt = mysqli_prepare($link, $sql)){

            // Vincular variables a la declaración preparada como parámetros

            mysqli_stmt_bind_param($stmt, "s", $param_username);

            

            // asignar parámetros

            $param_username = trim($_POST["usuario"]);

            

            // Intentar ejecutar la declaración preparada

            if(mysqli_stmt_execute($stmt)){

                /* almacenar resultado*/

                mysqli_stmt_store_result($stmt);

                

                if(mysqli_stmt_num_rows($stmt) == 1){

                    $username_err = "Este usuario ya fue tomado.";

                } else{

                    $usuario = trim($_POST["usuario"]);

                }

            } else{

                echo "Al parecer algo salió mal.";

            }

        }

         

        // Declaración de cierre

        mysqli_stmt_close($stmt);

    }

    

    // Validar contraseña

    if(empty(trim($_POST["contraseña"]))){

        $password_err = "Por favor ingresa una contraseña.";     

    } elseif(strlen(trim($_POST["contraseña"])) < 6){

        $password_err = "La contraseña al menos debe tener 6 caracteres.";

    } else{

        $contraseña = trim($_POST["contraseña"]);

    }

    

    // Validar que se confirma la contraseña

    if(empty(trim($_POST["confirm_password"]))){

        $confirm_password_err = "Confirma tu contraseña.";     

    } else{

        $confirm_password = trim($_POST["confirm_password"]);

        if(empty($password_err) && ($contraseña != $confirm_password)){
            $confirm_password_err = "No coincide la contraseña.";

        }

    }

    

    // Verifique los errores de entrada antes de insertar en la base de datos

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        

        // Prepare una declaración de inserción

        $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)";

         

        if($stmt = mysqli_prepare($link, $sql)){

            // Vincular variables a la declaración preparada como parámetros

            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            

            // Establecer parámetros

            $param_username = $usuario;

			$param_password = password_hash($contraseña, PASSWORD_DEFAULT); // Crear una contraseña hash

            

            // Intentar ejecutar la declaración preparada

            if(mysqli_stmt_execute($stmt)){

                // Redirigir a la página de inicio de sesión (login.php)

                header("location: Login/login.php");

            } else{

                echo "Algo salió mal, por favor inténtalo de nuevo.";

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
    <title>Registrarte</title>
    <link rel="shortcut icon" href="img/logoCTK.png">
</head>
<body background="img/fondo.jpg">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <fieldset>
            <h2>Registrate</h2>
            <input type="text" name="nom" id=""placeholder="Nombre"  required>&nbsp;
            <input type="text" name="apellido" id=""placeholder="Apellidos"required> <br>
            <br><input type="email" name="correo" id=""placeholder="Correo electronico"  value="<?php echo $usuario; ?>"required> <br>
            <span><?php echo $username_err; ?></span><br>
            <br><input type="password" name="contra" id=""placeholder="Contraseña" value="<?php echo $contraseña; ?>"required>
            <span><?php echo $confirm_password_err; ?></span><br>
            <h3>Fecha de Nacimiento</h3>
            <input type="date" name="fecha" id="" required>
            <br> <h3>Sexo</h3>
            <input type="radio" name="sex" id="" required>Mujer <br>
            <input type="radio" name="sex" id="" required>Hombre <br>
        
            <br><br>
            <input type="submit"  value="Ingresar">
            <input type="reset"  value="Borrar"><br>


            <p>¿Ya tienes una cuenta? <a href="login.php">Ingresa aquí</a>.</p>

        </fieldset>
    </form>
    <script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
    <script>
     var myLandbot = new Landbot.Livechat({
     configUrl: 'https://chats.landbot.io/v3/H-1014018-J8WL8K3KA2VF19L3/index.json',
     });
    </script>
    <table>
        <tr>
            <td style= "color:black;">CineTettaKisaki&copy;</td>
            <td style= "color:black;">Direccion: Calle las Vegas, Cercado de Lima, Perú<br>cel: 923298140</td>
            <td style= "color:black;">Desarrollado por el GRUPO 1&copy;</td>
        </tr>
    </table>
</body>
</html>
