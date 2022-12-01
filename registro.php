<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>index</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">

</head>

	<!-- Inicio del encabezado -->
	
	
<header>
	<nav>
		
		<!-- Encabezado para menú responsivo-->
		
         <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
           </label>
		
		<!-- Logo-->
		
          <a href="index.html" class="enlace">
            <img src="img/logo.png" alt="Sistema de Bibliotecas" class="logo">
		 </a>
		
        <!-- Menú-->
		
		<ul>
          <li><a href="index.html">Inicio</a></li>
        <li><a class="active" href="#">Usuarios</a></li>
        <li><a href="prestamos.html">Prestamos</a></li>
		<li><a href="login.html">Salir</a></li>  
      </ul>
	</nav>
    
</header>	
	
	<!-- Inicio del cuerpo -->
	
 <body class="login-img-body"> <!-- Imagen de fondo-->	
	 
	 <!-- Imagen de Formulario-->	
	<?php 
        if(isset($_POST['enviar'])){
            $tipodoc=$POST['tipodoc'];
            $documento=$POST['documento'];
            $nombres=$POST['nombres'];
            $apellidos=$POST['apellidos'];
            $grado=$POST['grado'];
            $telefono=$POST['telefono'];
            $email=$POST['email'];
            $rol=$POST['rol'];
            $passwd=$POST['passwd'];

            include("conexion.php");
            //insert into usuarios (tipodoc,documento,nombres,apellidos
            //grado,telefono,email,rol,idgrado,passwd) values ($tipodoc,$documento,$nombres,$apellidos,$grado,$telefono,$email,$rol,$passwd)
            $sql="INSERT INTO usuarios(tipodoc,documento,nombres,apellidos,grado,telefono,email,rol,passwd) 
            VALUES ('".$tipodoc."','".$documento."','".$nombres."','".$apellidos."','".$grado."','".$telefono."','".$email."','".$rol."','".$passwd."')";

            $resultado=mysqli_query($conexion,$sql);

            //generar alerta en js si se guardaron o si no 

            if($resultado){

                //se guardaron
                echo " <script language='JavaScript'>
                        alert('Los datos fueron ingresados 
                        correctamente a la bd');
                        location.asign('listado.php');
                        </script>";

            }else{
                //no se guardaron
                echo " <script language='JavaScript'>
                        alert('ERROR: Los datos NO fueron ingresados 
                        a la bd');
                        location.asign('listado.php');
                        </script>";

            }
            mysqli_close($conexion);

        }else{

        
    ?>
	<div class="container">
		<form class="formulario_1" action="<?=$_SERVER['PHP_SELF']?>" method="post">
			<div id="header">
			<ul class="nav1">
				<li><a href="listado.php">Listado</a></li>
				<li><a class="active" href="form_registro.html">Registrar</a></li>
				<li><a href="form_consultar.html">Consultar</a></li>
				<li><a href="form_modificar.html">Modificar</a></li>
				<li><a href="form_eliminar.html">Eliminar</a></li>
			</ul>
		</div>
            
		    <p class="elementos_formulario">&nbsp;</p>
		        <h3 class="elementos_formulario">Colegio San Ignacio</h3>
            <p class="elementos_formulario">
			    <label>Tipo de Documento</label> 
			        <input type="text" name="tipodoc" placeholder="CC TI ó CE">
			            
			       
			    <label>Nº Documento</label>
					<input type="number" name="documento" placeholder="Número de documento">
			</p>				
		    <p class="elementos_formulario">
		        <label>Nombres</label>
		        <input name="nombres" type="text" required="required" placeholder="Nombres" size="60%" maxlength="40">
                <label>Apellidos</label> 
			    <input name="apellidos" type="text" required="required" placeholder="Apellidos" size="60px" maxlength="40">
                
	        </p>
		    
			<p class="elementos_formulario">
			    <label>Grado</label>
			        <input name="grado" type="text" placeholder="">
			        
                <label>Teléfono</label>
                    <input type="number" name="telefono">
                
			    
		    </p>
            <p class="elementos_formulario">
                <label>Email</label> 
			        <input name="email" type="email" required="required" placeholder="Correo Electrónico" size="60px" maxlength="40">
            </p>
            <p class="elementos_formulario">
            	<label>Rol</label>
			        <input name="rol" type="text">
			            
			  	<label>Contraseña</label>
			  		<input type="password" name="passwd">	
		  </p>
			
			<p class="elementos_formulario">
			  <input class="btn-register" type="submit" name="enviar" value="Registrar">
                <a href="listado.php"></a>
			</p>
      </form>
      <?php 
        }
      ?>
	</div>
</body>

	<!-- Inicio del pie de página -->
<!--
<footer>
    
	<div class="flex-container">
 		<div class="flex-item"><a href="#">Proyecto ADSI - SENA</a></div>
		<div class="flex-item">Sistemas M.F. &copy; 2022 Todos los derechos reservados</div>
  		<div class="flex-item">
				<a href="#"><img src="img/facebook.png" width="40" height="40" alt="facebook"></a>
				<a href="#"><img src="img/youtube.png" width="40" height="40" alt="youtube"></a>
				<a href="#"><img src="img/linkedin.png" width="40" height="40" alt="linkedin"></a>
				<a href="#"><img src="img/wapp.png" width="40" height="40" alt="whatsapp"></a>
		</div>
	</div>

</footer>-->
</html>
