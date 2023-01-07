<?php
     
$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="reserva";

$enlace=mysqli_connect($servidor, $usuario, $clave, $basededatos);

if(!$enlace){
    echo "Error en la conexion con el servidor";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Boletos</title>
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
<body background="img/Fondoinicio.jpg">
   <center> <header>
        <div align="center"><img src="img/logo2CTK_(1).png" alt="" style="width: 450px;height: 180px;"></div>
        <u><center><h1 style="color : black;">Cine Tetta Kisaki&copy;</h1></center></u>
        <a href="inicio.html">Inicio</a>&nbsp;
        <a href="nosotros.html">Sobre Nosotros</a>&nbsp;
        <a href="comidas y bebidas.html">Comidas y Bebidas</a>&nbsp;
        <a href="reserva.php">Reserva de boletos</a>&nbsp;
        <a href="login.html">Intranet</a>&nbsp;
        <a href="equipo.html">Equipo</a>&nbsp;
    </header>
</center>
    <!-- Formulario -->

    <form  action="reserva.php" method="POST">
        <fieldset><!-- permite organizar en grupos los campos de un formulario -->
            <h3><legend>Nombre de pelicula a ver</legend></h3><!-- crea un titulo para un grupo de los campos -->
            <!-- etiqueta input -->
            <input type="text" name="nom" id=""placeholder="Nombre de la pelicula"required>
            <br>

            <h3><label>----------------------------------------------------</label></h3>
            <h3><label>Precio total de la reserva de boletos</label></h3>
            <h3><label>Cantidad de personas a ingresar:</label></h3>
               <input type="text" name="cant" placeholder="Cantidad de personas"><br>
               <br><input type="submit" name="total1" value="Total">
             <?php
                error_reporting(0);


                if(isset($_POST['total1'])){

                $cant=$_POST['cant'];

                $total=$cant*12.50;

                $total="s/." .number_format($total,2,".",",");
   
                echo "<h3>Total: $total </h3>";

                 }

               ?>
            <h3><label>----------------------------------------------------</label></h3>

            
            <h3><label>Recordatorio:<br> Si al momento de ingresar se le encuentra comida se le 
                decomisara y perdera el ingreso a la sala, evite llevar comida fuera de
                la venta del cine, ¡Gracias!<br>
                <img src="img/comidaaa2.jpg" align="center" width="200">
            </label></h3>
            <br><br>
            <label>Preferencia de asientos:</label>
            
            <div  class="preferencia">
                 <input type="radio" name="preferencia" id="Separados" value="Separados">
                 <label for="">Separado</label>
                 
                 <input type="radio" name="preferencia" id="Junto" value="Junto">
                 <label for="">Junto</label>


             </div>
            <br><br>
            
            <label>Fecha de reserva de la pelicula:</label>
            <input type="date" name="fec" id="">
            
            <br><br>
            <button  name="enviar" onclick="Enviar()">Enviar</button>

            <script type="text/javascript">
                function Enviar(){

                    swal('Reserva realizada','Gracias por su preferencia ♥','success');
                }

            </script>
        
            <!--<input type="submit" value="Enviar">-->
    </fieldset>
    </form>
    <footer>
        <table>
            <tr>
                <td style="color:black">Cine Tetta Kisaki&copy; Somos una empresa dedicado a la exhibición de 
                    peliculas.</td>
                <td style="color:black">Direccion: Calle las Vegas, Cercado de Lima, Perú <br>Cel: 923298140</td>
                <td style="color:black">Desarrollado por el GRUPO 1&copy;</td>
            </tr>
        </table>
    </footer>
    
</body>
</html>
<?php
     
if(isset($_post['enviar'])){
  $nom=$_POST["pelicula"] ;
  $cant=$_POST["cant"]; 
  $preferencia=$_POST["preferencia"] ;
  $fecha=$_POST["fec"] ;


  $insertar= "INSERT INTO boleto VALUES ('$nom','$cant','$preferencia','$fecha')";

  $ejecutarinsertar=mysqli_query($enlace, $insertar);

                                            
if (!$ejecutarinsertar){
    echo "Erroe en la linea sql";
}
}
?>