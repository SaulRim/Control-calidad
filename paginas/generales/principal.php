<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/menu_desplegable.css">
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagenes/LogoTec.ico">
    <title>Inicio</title>
</head>
<body>
    <?php require('header.php') ?>
    <h1 id = "tituloHeader">Sistema de Gestión de la Calidad ISO 9001:2015</h1>
    <hr>
    <div class = "contenedor">
        <ul class = "tarjetas">
            <li style = "--i:1;">
                <ion-icon name="clipboard-outline"></ion-icon>
                <div class = "content">
                    <a href = "../opciones/academico.php"><h4>Academico</h4>
                    </a>
                </div>
            </li>
            <li style = "--i:1;">
                <ion-icon name="book-outline"></ion-icon>
                <div class = "content">
                    <a href = "../opciones/recursos.php"><h4>Recursos</h4>
                    </a>
                </div>
            </li>
            <li style = "--i:1;">
                <ion-icon name="bulb-outline"></ion-icon>
                <div class = "content">
                    <a href = "../opciones/calidad.php"><h4>Calidad</h4></a>
                </div>
            </li>
            <li style = "--i:1;">
                <ion-icon name="easel-outline"></ion-icon>
                <div class = "content">
                    <a href = "../opciones/planeacion.php"><h4>Planeación</h4>
                    </a>
                </div>
            </li>
            <li style = "--i:1;">
                <ion-icon name="accessibility-outline"></ion-icon>
                <div class = "content">
                    <a href = "../opciones/vinculacion.php"><h4>Vinculación</h4>
                    </a>
                </div>
            </li>
        </ul>
   </div>
   <?php require('footer.php') ?>
</body>
</html>