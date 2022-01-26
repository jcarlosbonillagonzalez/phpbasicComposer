<?php 
$cursos = ['php','javascript'];
$interes = ['php','laravel','javascript','vuejs','.net'];

//array_dif se puede utilizar para mostrar las diferencias entre los arreglos importante organizar el arreglo que primero se instancie es el que va a traer el valor que no esta en el segundo arreglo
echo "<pre>";
var_dump(array_diff($interes, $cursos));

$arrayA = [1, 2,3,4,5];
$arrayB = [4,5,6];

echo "<pre>";
var_dump(array_diff($arrayB, $arrayA));