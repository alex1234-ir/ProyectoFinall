<?php 
    include("cn.php");
    $alumnos = "SELECT * FROM alumnos";

    

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/tablaa.css">
    
    
    <title>Tabla</title>
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
            
        <li><a href="deudas.php">Historial de Deudas</a></li>
                <li><a href="../buscador/index.php">Buscador</a></li>
                <li><a href="../factura/factura/index.php">Facturacion</a></li>
                <li><a href="../login/cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a></li>
        </ul>
    </nav>

</div>

</div>
    </header>
    

    <div id="centro">
        
    <a class="bottom" href="formulario.php"><p class="lin">Agregar</p></a>
    
          
</div>


    <div class="container-table">
        <br>

        <div class="table__title">Datos de Alumnos</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">&nbsp;Direccion&nbsp;</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Correo</div>
        <div class="table__header">&nbsp;Matricula&nbsp;</div>
        <div class="table__header">Grado</div>
        <div class="table__header">Cuatrimestre</div>
        <div class="table__header">No.</div>
        <div class="table__header">Beca</div>

        <?php $resultado = mysqli_query($conexion, $alumnos);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["nombre"];?></div>
            <div class="table__item"><?php echo $row["direccion"];?></div>
            <div class="table__item"><?php echo $row["telefono"];?></div>
            <div class="table__item"><?php echo $row["correo"];?></div>
            <div class="table__item"><?php echo $row["matricula"];?></div>
            <div class="table__item"><?php echo $row["grado"];?></div>
            <div class="table__item"><?php echo $row["cuatrimestre"];?></div>
            <div class="table__item"><?php echo $row["numero"];?></div>
            <div class="table__item"><?php echo $row["beca"];?></div>
            <?php } mysqli_free_result($resultado);?>
    </div>

    
</body>
</html>