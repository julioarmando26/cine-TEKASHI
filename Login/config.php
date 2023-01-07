<?php
define('DB_SERVER', 'localhost');//nombre del servidor


 
define('DB_USERNAME', 'root');

define('DB_PASSWORD', '');

define('DB_NAME', 'login');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 

// Se verifica la conexión, si no se puede realizar se indica el error

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>


?>

















?>

