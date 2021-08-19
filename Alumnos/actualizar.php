<?php 
    include("cn.php");
    $id = $_GET["id"];
    $historial = "SELECT * FROM historial WHERE id_historial = '$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosE.css">
    <title>Actualizar</title>
</head>
<body>
    <form class="container-table container-table--edit" action="procesar_actualizar.php" method="post">
        <div class="table__title table__title--edit">Edicion de datos</div>
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
            <input type="hidden" class="table__input" value="<?php echo $row["id_historial"];?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["nombre"];?>" name="nombre">
            <input type="text" class="table__input" value="<?php echo $row["matricula"];?>" name="matricula">

            <select class="table__input" value="<?php echo $row["cuatrimestre"];?>" name="cuatrimestre">
                <Option type="text">Cuatrimestre</Option>
                <Option type="text">Semestre</Option>
            </select>
            <select class="table__input" value="<?php echo $row["primero"];?>" name="primero">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["segundo"];?>" name="segundo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["tercero"];?>" name="tercero">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["cuarto"];?>" name="cuarto">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["quinto"];?>" name="quinto">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["sexto"];?>" name="sexto">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["septimo"];?>" name="septimo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["octavo"];?>" name="octavo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["noveno"];?>" name="noveno">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["decimo"];?>" name="decimo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <select class="table__input" value="<?php echo $row["onceavo"];?>" name="onceavo">
                <Option type="text">Debe</Option>
                <Option type="text">Pagado</Option>
            </select>
            <?php } mysqli_free_result($res);?>
            <input type="submit" value="Actualizar" class="container__submit--actualizar">
    </fomr>
</body>
</html>

