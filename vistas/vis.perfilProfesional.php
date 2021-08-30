<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Menu.css">
    <link rel="stylesheet" href="../css/viss.perfilProfesional.css">
    <script type="text/javascript" src="../Js/Prefix.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/fontello.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <script defer src="../Js/menuHamburguesa.js"></script>
    
  <--!   <?php
        require_once('../modelo/class.conexion.php');
        require_once('../modelo/class.profecional.php');
        require_once('../modelo/class.userSession.php');

        $prof = new Profesional();
        $userSession = new userSession();

        if(isset($_SESSION['profesional'])){
            $prof->setProfesional($userSession->getCurrentProfesional());	
        }else{
            header("location: ../vistas/vis.inicioSesion.php");
        }
    ?> -->
</head>
<body>
    <header>
            <div class="Sesion">
               <h2>Bienvenido: <?php echo $prof->getNombre(). ' ' .$prof->getApellido();; ?> </h2>   
               <button><a>Cerrar Sesion</a></button>
            </div>
                <div class="desplegable">
                <button class="nav-toggle" aria-label="Abrir menú"><i class="icon-menu"></i></button>
            </div>
            <nav class="Menu">
                <ul class="navButtons">
                <li class=""><a href="#">Información General</a></li>
                <li class="buttonActive"><a href="#">Reportes</a></li>
                <li class=""><a href="#">Administrador</a></li>
                <li class="UsuResp"><h2>*Nombre del usuario</h2></li>  
                <li class="SesionResp"><button><a>Cerrar Sesion</a></button></li>
                </ul>
            </nav>
        </header>
    <div class="containerKing">
        <div class="container">
            <div class="container2">
                <div class="subContainer">
                    <div class="contProfile">
                        <div class="contProfTit">
                            <h2>Profesional</h2>
                        </div>
                        <div class="contenidoProfile">
                            <div class="contFormProfile">
                                <img src="../css/img/foto-perfil.png" alt="Foto Perfil" class="fotoPerfil">
                                <input type="file" name="subir" value="Cambiar foto de perfil" class="submitFoto" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calification">
                    <div class="rate">
                        <h2>Calificación:</h2>
                    </div>
                    <div class="rating">
                        <input type="radio" name="star" id="star1" checked="checked">
                        <label for="star1"><img src="../css/img/1.png" ><h4>Terrible</h4></label>

                        <input type="radio" name="star" id="star2">
                        <label for="star2"><img src="../css/img/2.png"><h4>Malo</h4></label>

                        <input type="radio" name="star" id="star3">
                        <label for="star3"><img src="../css/img/3.png"><h4>Bueno</h4></label>

                        <input type="radio" name="star" id="star4">
                        <label for="star4"><img src="../css/img/4.png"><h4>Exelente</h4></label>

                        <input type="radio" name="star" id="star5">
                        <label for="star5"><img src="../css/img/5.png"><h4>Espectacular</h4></label>
                    </div>
                </div>
            </div>
            <div class="contInfo">
                <div class="contDetails">
                    <div class="contInfoTitulo">
                        <h2>Información de Contacto</h2>
                        <a href="../vista/vis.modificarProfesional.php" class="edit">editar</a>
                    </div>
                    <div class="contName">
                        <h4>Nombre:</h4>
                        <h3><?php echo $prof->getNombre(); ?></h3>
                    </div>
                    <div class="contLastN">
                        <h4>Apellido:</h4>
                        <h3><?php echo $prof->getApellido(); ?></h3>
                    </div>
                    <div class="contEmail">
                        <h4>Correo Electrónico:</h4>
                        <h3><?php echo $prof->getCorreo(); ?></h3>
                    </div>
                    <div class="contDate">
                        <h4>Fecha de Nacimiento:</h4>
                        <h3><?php echo $prof->getFechaNac(); ?></h3>
                    </div>
                    <div class="curriculum">
                        <h4>Curriculum:</h4>
                        <input type="file">
                    </div>
                    <div class="aboutMe">
                        <h4>Sobre mi:</h4>
                        <input type="text">
                    </div>
                </div>          
            </div>
        </div> 
    </div>   
</body>
</html>

