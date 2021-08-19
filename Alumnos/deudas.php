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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/deudas.css">
    <title>Deudas</title>
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
    
    <div id="btm">
    <a class="Terminado" href="tabla.php"><p class="lin">Terminado</p></a>
    </div>
    <div class="container-add">
        <h2 class="container__title">Registro</h2>
        <form action="insertarD.php" method="post" class="container__form">
            <label for="" class="container__label">Nombre: </label>
            <input type="text" class="container__input" name="nombre" placeholder="Nombre y Apellidos" required>
            <label for="" class="container__label">Matricula: </label>
            <input type="text" class="container__input" name="matricula" placeholder="Matricula" required>
            <select class="container__input" name="cuatrimestre">
                <Option type="text">Cuatrimestre</Option>
                <Option type="text">Semestre</Option>
            </select>
            <label for="" class="container__label">1°: </label>
            <select class="container__input" name="primero">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">2°: </label>
            <select class="container__input" name="segundo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">3°: </label>
            <select class="container__input" name="tercero">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">4°: </label>
            <select class="container__input" name="cuarto">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">5°: </label>
            <select class="container__input" name="quinto">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">6°: </label>
            <select class="container__input" name="sexto">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">7°: </label>
            <select class="container__input" name="septimo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">8°: </label>
            <select class="container__input" name="octavo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">9°: </label>
            <select class="container__input" name="noveno">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">10°: </label>
            <select class="container__input" name="decimo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <label for="" class="container__label">11°: </label>
            <select class="container__input" name="onceavo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <input class="container__submit" type="submit" value="Registrar">
        </form>
    </div>

    <div class="container-table">
        <div class="table__title">Historial de Deudas&nbsp;&nbsp;&nbsp;&nbsp; <a class="boton_personalizado" href="edicion.php">Editar</a></div>
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
            <?php } mysqli_free_result($res);?>
    </div>
</body>
</html>
     