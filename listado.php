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
		
		<!--Menú-->
		
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
 <!--prueba código php - código de conexión-->
 <?php 
    include("conexion.php");
    //select * from usuarios
    //variable para almacenar sintaxis bd
    $sql="select * from usuarios";
    //variable para enviar parámetros de cx y query
    $resultado=mysqli_query($conexion,$sql);
    
 ?>
	 
	 <!-- Imagen de Formulario-->	
	
	<div class="container">
		<form class="formulario_1">
			<div id="header">
			<ul class="nav1">
				<li><a href="listado.php">Listado</a></li>
				<li><a href="form_registro.html">Registrar</a></li>
				<li><a class="active" href="form_consultar.html">Consultar</a></li>
				<li><a href="form_modificar.html">Modificar</a></li>
				<li><a href="form_eliminar.html">Eliminar</a></li>
			</ul>
		</div>
		  <p class="elementos_formulario">&nbsp;</p>
		  <h3 class="elementos_formulario">Lista de usuarios</h3>
          <table>
            <thead>
                <tr>
                    <th>Reg</th>
                    <th>Tipo Doc</th>
                    <th>Documento</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Grado</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Rol</th>
					<th>Password</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!--código php para traer los datos uno por uno
                usando función con parámetro resultado-->
                <?php 
                    while($filas=mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $filas['idreg']?></td>
                    <td><?php echo $filas['tipodoc']?></td>
                    <td><?php echo $filas['documento']?></td>
                    <td><?php echo $filas['nombres']?></td>
                    <td><?php echo $filas['apellidos']?></td>
                    <td><?php echo $filas['grado']?></td>
                    <td><?php echo $filas['telefono']?></td>
                    <td><?php echo $filas['email']?></td>
					<td><?php echo $filas['rol']?></td>
                    <td><?php echo $filas['passwd']?></td>
                    <td>
                        <?php echo "<a href=''>EDITAR</a>";?>
                        -
                        <?php echo "<a href=''>ELIMINAR</a>";?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
          </table>
          <?php 
            mysqli_close($conexion);
          ?>
          
			<p class="elementos_formulario">
			  <input class="btn-register" type="submit" name="submit" id="submit" value="Consultar">
		  </p>
      </form>
	</div>
</body>

	<!-- Inicio del pie de página -->

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
</footer>
</html>
