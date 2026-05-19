<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="contenedor">
        <h1>Registro de Cursos Online</h1>
        <form action="verCursos.php" method="GET">
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Curso:</label>
            <select name="curso">
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
                <option value="MySQL">MySQL</option>
            </select>
            <button type="submit">Registrarse</button>
        </form>
        </div>
</body>
</html>