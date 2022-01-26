<?php

function saludo($name)
{
    echo "Buenas tardes Ing. $name </br> es un gusto saludarte </br></br>";
}
saludo('Carlos Bonilla');

/******************************************************************/
// El siguiente simbolo se utiliza como parametro por referencia & forza a que fuera de una funcion el valor sea el que se asigne dentro de ella y no de una externa
$curso = 'PHP';
function path(&$curso)
{
    $curso = 'C#';
    echo "Dentro de la funcion vale = $curso </br>" ;
}
path($curso);
echo "Por fuera de la funcion vale = $curso </br>";

//Datos predeterminados

function saludoDirecto($name = 'Juan Bonilla')
{
    echo "Buena noche $name </br>";
}

saludoDirecto();
saludoDirecto('Yiseth');