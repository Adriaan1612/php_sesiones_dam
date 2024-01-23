<?php
$ciudad='madrid'; //asignacion por valors
$destino=&$ciudad; //asignacion por referencia


echo'El destino es '.$destino;
$ciudad='madrid';
if($destino=='madrid'){
    echo'<p>la visita son 7 dias en Madrid</p>';
}
else{
    echo'<p>la visita son 3 dias en otra ciudad</p>';
}


echo '<p>Info del server'.var_dump($_SERVER).'</p>';
echo '<p>Info del server'.$_SERVER["LOCALAPPDATA"].'</p>';

//https://www.php.net/manual/en/language.variables.scope.php
$localidad='burgos';
function llamar()
{
    $localidad='barcelona';
    echo'<p>la ciudad mas chula es '.$localidad.'</p>';
}
llamar();
echo '<p>La ciudad mas ful es '.$localidad.'</p>';

$precio=15.95; //global scope
function calcular(){
    $unidades=7; //local scope
    global $precio;
    $total=$unidades*$precio;
    echo'<p>El importe total de la factura es '.$total.'</p>';

}
calcular();

//variables static
function contador(){
    static $a = 0;
    $a++;

    echo '<p>has cargado la página '.$a.' veces </p>';

}
contador();