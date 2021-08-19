<?php 

    include ("cn.php");

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

    $insert = "INSERT INTO historial(nombre, matricula, cuatrimestre, primero, segundo, tercero, cuarto, quinto, sexto, septimo, octavo, 
    noveno, decimo, onceavo) VALUES ('$nombre', '$matricula', '$cuatrimestre', '$primero', '$segundo', '$tercero', '$cuarto', '$quinto', 
    '$sexto', '$septimo', '$octavo', '$noveno','$decimo', '$onceavo')";

    $res = mysqli_query($conexion, $insert);
    if (!$res) {
        echo "<script>alert('Registro no exitoso')</script>";
    } else {
        echo "<script>alert('Registro exitoso')</script>";
        header("location: deudas.php");
    }
    
    mysqli_close($conexion);

?>