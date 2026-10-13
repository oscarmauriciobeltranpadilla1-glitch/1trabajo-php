<?php

// Definir tres variables enteras. Luego definir un string que incorpore dichas
// variables y las sustituya en tiempo de ejecución. Recordar que una variable se
// sustituye cuando el string está encerrado por comillas dobles:

$edad = 40;
$peso  = 70;
$cantidad = 1000;

$cliente = "los datos del cliente son $edad $peso $cantidad.";

echo "$cliente";
