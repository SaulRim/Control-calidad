<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="imagenes/LogoTec.ico">
    <title>Gestor de calidad</title>

</head>
<body>
	<img class="fondo" src="imagenes/fondo1.png">
	<div class="container">
		<div class="imagenLogo">
			<img src="imagenes/LogoTec.png">
		</div>
		<div class="loginContenedor">
			<form method= "POST">
				<div class="logoUsuario">
                    <img src="imagenes/Usuario.png">
                    <h2 class="title">Inicio de sesión</h2>
                </div>
           		<div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
           		   <div class="div">
           		   		<input name = "email" type="text" class="input" required = "required" id = "correo">
                        <h5>Email</h5>
           		   </div>
           		</div>
           		<div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
           		   <div class="div">
           		    	<input name = "password" type="password" class="input" required = "required" id = "password">
                        <h5>Contraseña</h5>  
            	   </div>
            	</div>
            	<a href="javascript:void(0)" class = "btn3" onclick="validarCorreo()" type="submit">Entrar</a>
            </form>
        </div>
    </div>
    <script>
        function validarCorreo() { 
          window.location.href = "paginas/generales/principal.php";
        }
    </script>
</body>
</html>