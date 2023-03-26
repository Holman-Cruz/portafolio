<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon-holman-cruz.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Conexión a hoja de estilos general -->
    <link rel="stylesheet" href="css/iniciostyle.css">
    <!-- Conexión a las hoja de estilos e iconos por CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="registro.php"></script>
    <title>Edición de registros</title>
</head>
<?php
	// Conexión a la base de datos
	$conn = new mysqli("localhost", "root", "", "portafolio");
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}

    //Modificación de datos
	$id = $_GET['id'];

	$sql = "SELECT id, nombre, email, telefono, mensaje FROM contacto WHERE id='$id'";
	$resultado = $conn->query($sql);

	if ($resultado->num_rows > 0) {
		$fila = $resultado->fetch_assoc();
        echo "<div class='container'><h2 class='text-center my-5'>Edición de registro</h2><form method='post' action=''><input type='hidden' name='id' value='". $fila["id"]. "'><div class='row'><label>Nombre:</label><input class='mb-3' type='text' name='nombre' value='". $fila["nombre"]. "'><br><label>Email:</label><input class='mb-3' type='text' name='email' value='". $fila["email"]. "'><br><label>Teléfono:</label><input class='mb-3' type='text' name='telefono' value='". $fila["telefono"]. "'><br><label>Mensaje:</label><textarea name='mensaje'>". $fila["mensaje"]. "</textarea><br></div><input class='btn btn-success mt-3' type='submit' name='guardar' value='Guardar cambios'></form></div>";
    }else {
        echo "No se encontró el registro";
	    }
	

	// Guardar cambios
	if (isset($_POST['guardar'])) {
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$mensaje = $_POST['mensaje'];

		$sql = "UPDATE contacto SET nombre='$nombre', email='$email', telefono='$telefono', mensaje='$mensaje' WHERE id='$id'";
		if ($conn->query($sql) === TRUE) {
			echo "Registro modificado con éxito";
			header("Location: gestion.php");
			exit();
		} else {
			echo "Error al modificar el registro: " . $conn->error;
		}
	}

	// Cierre de la conexión
	$conn->close();
	?>