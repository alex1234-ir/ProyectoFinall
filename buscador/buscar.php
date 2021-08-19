<?php
	$servername = "localhost";
    $username = "root";
  	$password = "root";
  	$dbname = "login_tuto";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM alumnos WHERE nombre NOT LIKE '' ORDER By id LIMIT 100";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM alumnos WHERE id LIKE '%$q%' OR nombre LIKE '%$q%' OR direccion LIKE '%$q%' 
		OR telefono LIKE '%$q%' OR correo LIKE '%$q%' OR matricula LIKE '%$q%' OR grado LIKE '%$q%' OR cuatrimestre LIKE '%$q%'
		OR numero LIKE '%$q%' OR beca LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>NOMBRE</td>
						<td>DIRECCION</td>
						<td>TELEFONO</td>
						<td>CORREO</td>
    					<td>MATRICULA</td>
						<td>GRADO</td>
    					<td>CUATRIMESTRE</td>
    					<td>No.</td>
						<td>BECA</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['direccion']."</td>
    					<td>".$fila['telefono']."</td>
    					<td>".$fila['correo']."</td>
						<td>".$fila['matricula']."</td>
						<td>".$fila['grado']."</td>
						<td>".$fila['cuatrimestre']."</td>
						<td>".$fila['numero']."</td>
						<td>".$fila['beca']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>