<?php 
    include("cn.php");
    $historial = "SELECT * FROM historial";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edicion.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Panel de edicion</title>
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
    <br><br><br><br><br><br>
    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Historial de Deudas</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Matricula</div>
        <div class="table__header">Cuatrimestre</div>
        <div class="table__header">1°</div>
        <div class="table__header">2°</div>
        <div class="table__header">3°</div>
        <div class="table__header">4°</div>
        <div class="table__header">5°</div>
        <div class="table__header">6°</div>
        <div class="table__header">7°</div>
        <div class="table__header">8°</div>
        <div class="table__header">9°</div>
        <div class="table__header">10°</div>
        <div class="table__header">11°</div>
        <div class="table__header">Operacion</div>

        <?php $res = mysqli_query($conexion, $historial);
        while($row=mysqli_fetch_assoc($res)) { ?>
            <div class="table__item"><?php echo $row["nombre"];?></div>
            <div class="table__item"><?php echo $row["matricula"];?></div>
            <div class="table__item"><?php echo $row["cuatrimestre"];?></div>
            <div class="table__item"><?php echo $row["primero"];?></div>
            <div class="table__item"><?php echo $row["segundo"];?></div>
            <div class="table__item"><?php echo $row["tercero"];?></div>
            <div class="table__item"><?php echo $row["cuarto"];?></div>
            <div class="table__item"><?php echo $row["quinto"];?></div>
            <div class="table__item"><?php echo $row["sexto"];?></div>
            <div class="table__item"><?php echo $row["septimo"];?></div>
            <div class="table__item"><?php echo $row["octavo"];?></div>
            <div class="table__item"><?php echo $row["noveno"];?></div>
            <div class="table__item"><?php echo $row["decimo"];?></div>
            <div class="table__item"><?php echo $row["onceavo"];?></div>
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["id_historial"];?>" class="table__item__link">Editar</a> |
                <!-- <a href="eliminar.php?id=<?php echo $row["id_historial"];?>" class="table__item__link">Eliminar</a> -->
            </div>
            <?php } mysqli_free_result($res);?>
    </div>
</body>
</html>
     