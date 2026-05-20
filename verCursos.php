<?php 
include 'funciones.php';
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Invitado';
$email  = isset($_GET['email']) ? $_GET['email'] : 'No provisto';
$curso  = isset($_GET['curso']) ? $_GET['curso'] : 'Ninguno';
$fecha  = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del Curso</title>
    <link rel="icon" type="image/png" href="image/iconogratis.png">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Información del Curso</h1>
        <?php echo mostrarCurso($curso); ?>
        <h2>Datos Registrados</h2>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        <p><strong>Curso:</strong> <?php echo htmlspecialchars($curso); ?></p>
        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>
        <a href="index.php">
            <button>Volver al formulario</button>
        </a>
    </div>
</body>
</html>
