<?php
//Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de
//dos enteros

$numero = rand(1,100);

 echo "numero es: ". $numero . "<br>";

 if($numero <=50) {
  echo "el numero es menor o igual que 50";
 } else {
    echo "el numero es mayor a 50";
 }

 

