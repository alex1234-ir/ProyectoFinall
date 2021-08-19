<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulario</title>
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
                <li><a href="../buscador/index.php">Buscador</a></li>
                <li><a href="../factura/factura/index.php">Facturacion</a></li>
                <li><a href="../login/cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a></li>
        </ul>
    </nav>

</div>

</div>
    </header>
    <form action="insertar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre y Apellidos" required>
        <input type="text" name="direccion" placeholder="Direccion" required>
        <input type="text" name="telefono" placeholder="Telefono" required>
        <input type="text" name="correo" placeholder="correo" required>
        <input type="text" name="matricula" placeholder="Matricula" required>
        <select name="grado">
            <Option type="text">Grado</Option>
            <Option type="text">Ciclo</Option>
        </select>
        <select name="cuatrimestre">
            <Option type="text">Cuatrimestre</Option>
            <Option type="text">Semestre</Option>
        </select>
        <select name="numero">
            <Option type="text">1</Option>
            <Option type="text">2</Option>
            <Option type="text">3</Option>
            <Option type="text">4</Option>
            <Option type="text">5</Option>
            <Option type="text">6</Option>
            <Option type="text">7</Option>
            <Option type="text">8</Option>
            <Option type="text">9</Option>
            <Option type="text">10</Option>
            <Option type="text">11</Option>
        </select>
        <h1>Beca</h1>
        <select class="h2" name="beca">
            <Option type="text">50%</Option>
            <Option type="text">100%</Option>
        </select>
        <input type="submit" value="Enviar" id="boton">
    </form>
</body>
</html>