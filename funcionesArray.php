<?php
$cursos = [
    10=>'php',
    100=>'javascript',
    1000=>'laravel'
];
//Ordernar alfabeticamente el arreglo
//sort($cursos);
//Ordenar en orden descendente el arreglo
//rsort($cursos);
ksort($cursos);
//krsort($cursos);

echo "<pre>";
//var_dump($cursos);

//Rebanada, se utiliza para indicar desde que posición va a iniciar el arreglo
var_dump(array_slice($cursos, 1));

//se utiliza para optimizar el arreglo se pasa el arreglo y se dice en cuantas secciones se quiere dividir esto para optimizar la lectura del mismo (Cantidad de datos grandes)
var_dump(array_chunk($cursos,2));


//sort: Ordena un array.
//rsort: Ordena un array en orden inverso.
//ksort: Ordena un array por clave.
//krsort: Ordena un array por clave en orden inverso.
//array_slice: Extrae una parte de un array.
//array_chunk: Divide un array en fragmentos.
//array_shift: Quita un elemento del principio del array.
//array_pop: Extrae el último elemento del final del array.
//array_unshift: Añadir al inicio de un array uno a más elementos.
//array_push: Inserta uno o más elementos al final de un array.
//array_flip: Intercambia todas las claves de un array con sus valores asociados.
