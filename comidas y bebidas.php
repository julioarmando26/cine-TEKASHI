

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comidas y bebidas</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/jul.css">
    <link rel="stylesheet" href="css/custom3.css">
    <link rel="shortcut icon" href="img/logoCTK.png">
    <style>
        a{
          color: rgb(255, 255, 255);
          background-color: #a39589;
          padding: 5px 10px;
          text-decoration:  none;
          border-radius: 5px;
        }
      </style>
</head>
<body>

    <header id="header" class="header">
        <div class="four columns">
            <img src="img/logo.png" alt="" id="logo">
        </div>
            <a href="inicio.html">Inicio</a>&nbsp;
            <a href="nosotros.html">Sobre Nosotros</a>&nbsp;
            <a href="comidas y bebidas.html">Comidas y Bebidas</a>&nbsp;
            <a href="reserva.php">Reserva de boletos</a>&nbsp;
            <a href="login.php">Intranet</a>&nbsp;
            <a href="equipo.html">Equipo</a>&nbsp;
        <div class="container">
            <div class="row">

                

                <div class="two columns u-pull-right">
                    <ul>
                        <li class="submenu">
                            <img src="img/cart.png" alt="" id="img-carrito">
                            <div id="carrito">
                                <table id="lista-carrito" class="u-full-width">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Nombre</th>
                                            <th>Precio</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                                <a href="#" id="vaciar-carrito" class="button u-full-width">Vaciar Carrito</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div id="hero">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <div class="contenido-gaa">
                        <h2 style="color: whitesmoke;">Pide tu comida en linea</h2>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="barra">
        <div class="container">
            <div class="row">
                <div class="four columns icono icono1">
                    <p>100 tipos de comida<br>
                        Explora los sabores mas recientes
                    </p>
                </div>
                <div class="four columns icono icono2">
                    <p>Expertos en alimentos y bebidas<br>
                        Explora los distintos sabores 
                    </p>
                </div>
                <div class="four columns icono icono3">
                    <p>comida y bebidas de calidad<br>
                        100% Natural
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="lista-cafe" class="container">
        <h1 id="encabezado" class="encabezado">Pedidos en linea</h1>
        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/coffee1.jpg"alt="" style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Cafe negro</h4>
                        <p>Marca nesca</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.7.50 <span class="u-pull-right">S/.5</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/coca.png" style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Gaseosa</h4>
                        <p>Marca cocacola</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.10 <span class="u-pull-right">S/.5</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/hot dogs.jpg"  style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Hod dogs</h4>
                        <p>Con 3 hot dogs</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.15 <span class="u-pull-right">S/.10</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
        </div><!--.row-->

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/palomitas-maiz-peso.jpg"  style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>1 box de palomita de maiz</h4>
                        <p>calientitas</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.15 <span class="u-pull-right">S/.10</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/hamburgueza.jpg"  style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4> Hamburgueza</h4>
                        <p>La mexicana</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.25 <span class="u-pull-right">S/.15</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/refresco-de-carambola-1-1-425x375.jpg"  style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Refresco </h4>
                        <p>Sabor a carambola</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.5 <span class="u-pull-right">S/.3</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
        </div><!--.row-->

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/chicha.jpg"   style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Refresco</h4>
                        <p>Chicha morada</p>
                        <img src="img/estrellas.png"  >
                        <p class="precio">S/.5 <span class="u-pull-right">S/.3</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/inkacola.png"  style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Gasesosa</h4>
                        <p>Inca Kola</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.10 <span class="u-pull-right">S/.5</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/pepsi.jpg"  style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Gaseosa</h4>
                        <p>Marca Pepsi</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.10 <span class="u-pull-right">S/.5</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
        </div><!--.row-->

        <div class="row">
            <div class="four columns">
                <div class="card">
                    <img src="img/lays.jpg" style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4> Papitas fritas</h4>
                        <p>Marca lays</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.5 <span class="u-pull-right">S/.3</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/snicker.jpg" style="width: 295px;height: 165px;" class="u-full-width">
                    <div class="info-card">
                        <h4>Galleta</h4>
                        <p>Snickers</p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.8 <span class="u-pull-right">S/.5</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="card">
                    <img src="img/ice.jpg" style="width: 295px;height: 165px;"class="u-full-width">
                    <div class="info-card">
                        <h4>Bebida</h4>
                        <p>Ice </p>
                        <img src="img/estrellas.png" >
                        <p class="precio">S/.10<span class="u-pull-right">S/.5</span></p>
                        <a href="#" 
                        class="u-full-width button-primary button input agregar-carrito                        
                        ">Agregar Al Carrito</a>
                    </div>
                </div>
            </div>
        </div><!--.row-->
    </div>

    <footer id="footer" class="footer"> 
        <div class="container">
            <div class="row">
                <div class="four columns">
                    <nav id="principal" class="menu">
                       
                        <a class="enlace" href="crear cuenta.html">Conviertete en socio</a>
                       
                    </nav>
                </div>
                <div class="four columns">
                    <nav id="secundaria" class="menu">
                        <a class="enlace" href="nosotros.html">¿Quienes somos?</a>
                    
                    </nav>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <td style= "color: white;">CineTettaKisaki&copy;</td>
                <td style= "color: white;">Direccion: Calle las Vegas, Cercado de Lima, Perú<br>Cel: 923298140</td>
                <td style= "color: white;">Desarrollado por el GRUPO 1&copy;</td>
            </tr>
        </table>
    </footer>

<script src="js/app.js"></script>
</body>
</html>
