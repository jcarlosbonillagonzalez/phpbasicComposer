<?php

echo "<h1>Return</h1>";
echo "---------------";
//Forma parte de cualquier función
//Necesitamos Return precisamente para devolver y entregar con éxito lo que has procesado anteriormente

function saludar(){
	return "<h1>Hola</h1>"; 
}

echo saludar();


//Para retornar mas de un valor o elemento utilizamos un array
function datos(){
	return [1001, 'PDF', 'Laravel']; 
}

var_dump(datos());

exit(); //detiene la ejecución del sistema
return; //retorna