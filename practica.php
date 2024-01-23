
//https://www.php.net/manual/en/language.variables.external.php
/*
 * Tienes un formulario que pide un correo y un mensaje
 * envia el formulario y muestra el mensaje al reves
 *
 */

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP Chuli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];

        // Mostrar el mensaje al revés
        $mensaje_al_reves = strrev($mensaje);
        ?>
        <div class="alert alert-success" role="alert">
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($correo); ?></p>
            <p><strong>Mensaje original:</strong> <?php echo htmlspecialchars($mensaje); ?></p>
            <p><strong>Mensaje al revés:</strong> <?php echo htmlspecialchars($mensaje_al_reves); ?></p>
        </div>
        <?php
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" class="form-control" name="correo" required>
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea class="form-control" name="mensaje" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

</body>
</html>

<div>
    <h2>Mensaje al Revés</h2>

    <?php
    // Obtener datos del formulario
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';

    // Mostrar el mensaje al revés
    $mensajeAlReves = strrev($mensaje);

    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Mensaje al Revés:</strong> $mensajeAlReves</p>";
    ?>

    <p><a href="index.php">Volver al formulario</a></p>
</div>
</body>
</html>
