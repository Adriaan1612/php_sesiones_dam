<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Contenido de Archivo</title>
</head>
<body>
<h2>Ingrese la ruta del archivo:</h2>
<form method="post" action="">
    <label for="rutaArchivo">Ruta del archivo:</label>
    <input type="text" id="rutaArchivo" name="rutaArchivo" required>
    <button type="submit">Mostrar Contenido</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar el formulario si se envió
    $rutaArchivo = isset($_POST['rutaArchivo']) ? trim($_POST['rutaArchivo']) : '';

    if (!empty($rutaArchivo)) {
        // Obtener el contenido remoto
        $contenido = file_get_contents($rutaArchivo);

        // Verificar si se obtuvo el contenido correctamente
        if ($contenido !== false) {
            echo '<hr>';
            echo '<h2>Contenido del Archivo:</h2>';
            echo nl2br($contenido); // nl2br para preservar saltos de línea
        } else {
            echo '<p>No se pudo obtener el contenido remoto.</p>';
        }
    }
}
?>
</body>
</html>

