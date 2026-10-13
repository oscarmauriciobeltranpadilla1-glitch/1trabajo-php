<?php

// Generar un valor aleatorio entre 20 y 25. Luego imprimir en español el número
// (Ejemplo. Si se genera el 21 luego mostrar en la página el string “Veintiuno”). Para
// ver si una variable es igual a cierto valor debemos plantear una condición similar a:
// If ($valor==21) {
// //algoritmo
// }

$numero = rand(20,25);

echo "numero es: ". $numero . "<br><br>";

if($numero == 20){
    echo"veinte";
}elseif($numero==21){
    echo"veintiuno";
}elseif($numero == 22){
    echo"veitidos";
}elseif($numero == 23){
    echo"veintitres";
}elseif($numero == 24){
    echo"veinticuatro";
}elseif($numer==25){
    echo"veinticinco";
}

?>


