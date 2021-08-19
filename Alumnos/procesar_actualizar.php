<?php 

    include ("cn.php");

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $matricula = $_POST["matricula"];
    $cuatrimestre = $_POST["cuatrimestre"];
    $primero = $_POST["primero"];
    $segundo = $_POST["segundo"];
    $tercero = $_POST["tercero"];
    $cuarto = $_POST["cuarto"];
    $quinto = $_POST["quinto"];
    $sexto = $_POST["sexto"];
    $septimo = $_POST["septimo"];
    $octavo = $_POST["octavo"];
    $noveno = $_POST["noveno"];
    $decimo = $_POST["decimo"];
    $onceavo = $_POST["onceavo"];

    $actualizar = "UPDATE historial Set nombre='$nombre', matricula='$matricula', cuatrimestre='$cuatrimestre', primero='$primero', 
    segundo='$segundo', tercero='$tercero', cuarto='$cuarto', quinto='$quinto', sexto='$septimo', octavo='$octavo', 
    noveno='$noveno', decimo='$decimo', onceavo='$onceavo' WHERE id_historial='$id'";

    $res = mysqli_query($conexion, $actualizar);
    if (!$res) {
        echo "<script>alert('Actualizacion no exitosa')</script>";
    } else {
        echo "<script>alert('Actualizacion exitosa')</script>";
        header("location: deudas.php");
    }
    
    mysqli_close($conexion);

?>