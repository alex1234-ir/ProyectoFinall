<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/buscador.css"> 
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	<title>Buscar...</title>
</head>
<body>

<header>
    <div class="header-content">

<div class="logo">
    <h1>Universidad</h1>
</div>

<div class="menu" id="show-menu">

    <nav>
        <ul>
            
        <li><a href="../Alumnos/tabla.php">Inicio</a></li>
        <li><a href="../factura/factura/index.php">Facturacion</a></li>
        <li><a href="../login/cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a></li>
        </ul>
    </nav>

</div>

</div>
    </header>

<section class="principal">

	<h2>BUSQUEDA AVANZADA</h2>

	<div class="formulario">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>

		
	</div>

	<div id="datos"></div>
	
	
</section>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>