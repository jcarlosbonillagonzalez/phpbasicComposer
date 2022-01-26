<?php

echo "<h1>Array Complejo</h1>";
echo "-----------------------</br>";

$cursos = [
	'frontend'=>'javascrip', 
	'framework'=>'laravel', 
	'backend'=>'php'
];

foreach ($cursos as $key => $curso) {
    # code...
    echo "$key: $curso </br>";
}

echo "-----------------------</br>";

function uper($curso, $key)
{
    echo strtoupper($curso) .": $key</br>";
}
//se pasa el arreglo y la función en la cual se va a realizar la acción con el arreglo
array_walk($cursos,'uper');

//echo '<pre>';
//var_dump($course);


/*	
	//Existe un Key
	array_key_exists('frontend', $courses);
	//Existe un valor
	in_array('javascript', $courses);
	//Muestra todos los Key
	array_keys($courses);
	//Muestra todos los valores
	array_values($courses);
*/