<?php 

    include ("cn.php");

    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $matricula = $_POST["matricula"];
    $grado = $_POST["grado"];
    $cuatrimestre = $_POST["cuatrimestre"];
    $numero = $_POST["numero"];
    $beca = $_POST["beca"];

    $insertar = "INSERT INTO alumnos(nombre, direccion, telefono, correo, matricula, grado, cuatrimestre, numero, beca) VALUES ('$nombre', 
    '$direccion', '$telefono', '$correo', '$matricula', '$grado', '$cuatrimestre', '$numero', '$beca')";

    $resultado = mysqli_query($conexion, $insertar);
    if (!$resultado) {
        echo "<script>alert('Registro no exitoso')</script>";
    } else {
        echo "<script>alert('Registro exitoso')</script>";
        header("location: tabla.php");
    }
    
    mysqli_close($conexion);

?>
