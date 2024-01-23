<?php
$url = 'https://raw.githubusercontent.com/dacap/htmlex/master/make/leame.txt';

// Obtener el contenido remoto
$contenido = file_get_contents($url);

// Verificar si se obtuvo el contenido correctamente
if ($contenido !== false) {
    echo $contenido;
} else {
    echo 'No se pudo obtener el contenido remoto.';
}
?>

