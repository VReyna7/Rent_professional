<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vis.listadoAdministrador.css?v=<?php echo time(); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <script defer src="../JavaScript/menuHamburguesa.js"></script>
    <title>Administradores-Listado</title>
    <?php
		require_once('../modelo/class.conexion.php');
        require_once('../modelo/class.cliente.php');
        require_once('../modelo/class.userSession.php');
        require_once('../modelo/class.administrador.php');

        $adm = new Administrador();
        $userSession = new userSession();

	?>
</head>
<body>
    <div class="containerKing">
        <div class="header">
            <h3 class="nombreUsuario">Bienvenido: <?php //echo $cltn->getNombre() ." " . $cltn->getApellido()?> </h3>
            <button class="endSesion"><a href="../controlador/cerrarSesion.php">Cerrar Sesión</a></button>
        </div>
        <header class="encabezado">
            <nav class="navigationBar">
                <button class="nav-toggle" aria-label="Abrir menú"><i class="fas fa-bars"></i></button>
                <ul class="navButtons">
                <a href="vis.publicaciones.php" class="links"><li class="buttons">Inicio</li></a>
                    <a href="vis.listadocliente.php" class="links"><li class="buttonActive">Chat</li></a>
                    <a href="vis.perfilCliente.php" class="links"><li class="buttons">Perfil</li></a>
                </ul>
            </nav>
        </header>
        <div class="header2">
            <h3 class="nombreUsuario">Bienvenido: <?php //echo $cltn->getNombre() ." " . $cltn->getApellido()?></h3>
            <button class="endSesion"><a href="../controlador/cerrarSesion.php">Cerrar Sesión</a></button>
        </div>
        <div class="container">
            <div class="contInfo">
                <div class="contDetails">
                    <div class="contInfoTitulo">
                        <h2>Administradores</h2>
                        <button class="addAdmin"><a href="vis.registroAdmin.php" class="añadir">Añadir Administrador</a></button>
                    </div>
                </div>          
            </div>
            
            <?php
                $listado = $adm->listadoProfesional();
                foreach($listado as $admins){
                    echo '<div class="admins">';
                    echo '<div class="contName">';
					$enlace = "<a class='nombre' href=../vistas/vis.perfilProfesional.php?&id=".$admins['id'].">"."<h3>".$admins['nombre']." ".$admins['apellido']."</h3></a>";
                    echo  '<h4>Cliente: </h4>';
					echo $enlace;
                   echo '</div>';
                   echo '<div><h4>ID:'.$admins['id'].'</h4><h4>'.$admins['correo'].'</h4></div><br/>';
                echo '</div>';
                }
            ?>
            <button class="addAdmin2"><a>Añadir Administrador</a></button>
            <button class="endSesion2"><a href="../controlador/cerrarSesion.php">Cerrar Sesión</a></button>
        </div>
    </div>
</body>
</html>
