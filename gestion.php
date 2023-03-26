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
    <title>Gestion de registros</title>
</head>
<?php
	// Conexión con la base de datos
	$conn = new mysqli("localhost", "root", "", "portafolio");
	if ($conn->connect_error) {
		die("Conexión fallida: " . $conn->connect_error);
	}

	// Listar registros
	$sql = "SELECT id, nombre, email, telefono, mensaje FROM contacto";
	$resultado = $conn->query($sql);

	// Mostrar los registros en una tabla
	if ($resultado->num_rows > 0) {
		echo '<div class="container pt-5"><h2 class="text-center pb-3">Listado de registros</h2><div class="table-responsive"><table class="table table-striped table-hover"><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Mensaje</th><th>Acciones</th></tr>';
		// Salida de datos de cada fila
		while($fila = $resultado->fetch_assoc()) {
			echo "<tr><td>" . $fila["id"]. "</td><td>" . $fila["nombre"]. "</td><td>" . $fila["email"]. "</td><td>" . $fila["telefono"]. "</td><td>" . $fila["mensaje"]. "</td><td><form method='post' action=''><input type='hidden' name='id' value='". $fila["id"]. "'><input class='btn btn-warning m-2' type='submit' name='modificar' value='Modificar'><input class='btn btn-danger m-2' type='submit' name='eliminar' value='Eliminar'></form></td></tr>";
		}
		echo "</table></div></div>";
	} else {
		echo "No se encontraron registros";
	}

	// Acción del botón "Modificar"
	if (isset($_POST['modificar'])) {
		$id = $_POST['id'];
		header("Location: modificar.php?id=$id");
		exit();
	}

	// Acción del botón "Eliminar"
	if (isset($_POST['eliminar'])) {
		$id = $_POST['id'];
		$sql = "DELETE FROM contacto WHERE id='$id'";
		if ($conn->query($sql) === TRUE) {
			echo "Registro eliminado con éxito";
			header("Location: gestion.php");
			exit();
		} else {
			echo "Error al eliminar el registro: " . $conn->error;
		}
	}

	// Cierre de la conexión
	$conn->close();
	?>