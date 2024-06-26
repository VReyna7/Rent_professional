<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vis.modificarCorreo.css?v=<?php echo time(); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script defer src="../JavaScript/menuHamburguesa.js"></script>
    <title>Document</title>
    <?php
		require_once("../modelo/class.conexion.php");
        require_once("../modelo/class.profecional.php");
        require_once("../modelo/class.cliente.php");
        require_once("../modelo/class.userSession.php");

        $userSesion =new userSession();

        if(isset($_SESSION['profesional'])){
        	$user = new Profesional();
            $user->setProfesional($userSesion->getCurrentProfesional());
		}elseif(isset($_SESSION['cliente'])){
			$user = new Cliente();
			$user->setCliente($userSesion->getCurrentCliente());
		}else
			//header("location: ../vistas/vis.inicioSesion.php");
	?>
</head>
<body>
    <div class="containerKing">
        <div class="header">
            <h3 class="nombreUsuario">Bienvenido: <?php echo $user->getNombre(). ' ' .$user->getApellido();; ?></h3>
            <button class="endSesion"><a href="#">Cerrar Sesión</a></button>
        </div>
        <header class="encabezado">
            <nav class="navigationBar">
                <button class="nav-toggle" aria-label="Abrir menú"><i class="fas fa-bars"></i></button>
            </nav>
        </header>
        <div class="header2">
            <h3 class="nombreUsuario">Bienvenido: <?php echo $user->getNombre(). ' ' .$user->getApellido();; ?></h3>
            <button class="endSesion"><a href="../controlador/cerrarSesion.php">Cerrar Sesión</a></button>
        </div>
        <div class="container">
            <div class="contenido">
                <h3>Digitar el nuevo correo electronico</h3>
                <form class="cambios" action="../controlador/modificarEmail.php" method="POST">
                    <input type="email" name="mail" placeholder="example@gmail.com" required autocomplete="off" class="nuevoCorreo">
			        <input type="submit" value="Modificar datos" class="modificarDatos" onClick="mensaje()">
                </form>
           </div>
        </div>
    </div>
</body>
<script>
    function mensaje(){
        alert('Advertencia: Para que los cambios sean correctamente aplicados debe iniciar sesión nuevamente, por lo que sera redirigido automáticamente al formulario.');
    }
</script>
</html>
