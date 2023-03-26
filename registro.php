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
    <title>Registro de Datos</title>
</head>

<?php
// Información de la base de datos
$host = 'localhost';
$dbname = 'portafolio';
$username = 'root';
$password = '';

// Conexión a la base de datos
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // configurar el modo de error de PDO a excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Validación de envio del formulario
    if (isset($_POST['submit'])) {
        // preparar y ejecutar la consulta SQL para insertar los datos del formulario
        $stmt = $conn->prepare("INSERT INTO contacto (nombre, email, telefono, mensaje, autorizacion) VALUES (:nombre, :email, :telefono, :mensaje, :autorizacion)");
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':telefono', $_POST['telefono']);
        $stmt->bindParam(':mensaje', $_POST['mensaje']);
        $stmt->bindParam(':autorizacion', $_POST['autorizacion']);
        $stmt->execute();

        echo '<center><h1 class="primary mt-5">¡Gracias por enviar tus datos!</h1>
        <p class="leadr">Te contactaré lo antes posible.</p>
        <a href="index.php"><button type="button" class="btn btn-warning mt-5"><i class="bi bi-house"></i> Volver a la página principal</button></a></center>';
    } else {
        echo '<center><h1 class="primary mt-5">Lo siento, tus datos no han sido registrados</h1>
        <p class="leadr">Por favor intentalo nuevamente.</p>
        <a href="index.php"><button type="button" class="btn btn-warning mt-5"><i class="bi bi-house"></i> Volver a la página principal</button></a></center>';
    }
} catch(PDOException $e) {
    echo "Error al guardar los datos: " . $e->getMessage();
}
?>
