<?php

session_start();


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: Login/login.php");

    exit;

}


require_once "Login/config.php";


$new_password = $confirm_password = "";

$new_password_err = $confirm_password_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){



    if(empty(trim($_POST["new_password"]))){

        $new_password_err = "Por favor, introduzca la nueva contraseña.";     

    } elseif(strlen(trim($_POST["new_password"])) < 20){
        $new_password_err = "La contraseña debe tener al menos 6 caracteres.";

    } else{

        $new_password = trim($_POST["new_password"]);

    }

    

    // Validar la confirmación de contraseña

    if(empty(trim($_POST["confirm_password"]))){

        $confirm_password_err = "Por favor confirme la contraseña.";

    } else{

        $confirm_password = trim($_POST["confirm_password"]);

        if(empty($new_password_err) && ($new_password != $confirm_password)){

            $confirm_password_err = "Las contraseñas no coinciden.";

        }

    }



    if(empty($new_password_err) && empty($confirm_password_err)){


        $sql = "UPDATE usuarios SET contraseña = ? WHERE id = ?";

        

        if($stmt = mysqli_prepare($link, $sql)){


            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);


            $param_password = password_hash($new_password, PASSWORD_DEFAULT);

            $param_id = $_SESSION["id"];


            if(mysqli_stmt_execute($stmt)){


                session_destroy();

                header("location: login.php");

                exit();

            } else{

                echo "Algo salió mal, por favor vuelva a intentarlo.";

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
    <title>Recuperar cuenta</title>
    <link rel="shortcut icon" href="img/logoCTK.png">
    <link rel="stylesheet" href="css/estiloR.css">
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
<body background="img/fondo.jpg">
    <form style="color: black;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Recuperar tu cuenta</h2>
        <fieldset>
            <h3>Correo Electronico</h3><br>
            <input type="email" name="correo" id="" placeholder="Correo Electronico"required>
            <h3>Contraseña Nueva</h3>
            <input type="contraseña" name="new_password" value="<?php echo $new_password; ?>">
            <span><?php echo $new_password_err; ?></span><br>

            <br><br>
            
            <label>Confirmar contraseña</label>

            <input type="password" name="confirm_password" >
            <span><?php echo $confirm_password_err; ?></span><br>

            <input type="submit" value="Enviar"><br>
            <a class="btn btn-link" href="Login/index.php">Cancelar</a>

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