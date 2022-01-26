<?php
//FUNCION ANONIMA COMO EL NOMBRE LO INDICA SE CREA LA FUNCION SIN EL NOMBRE
//Se utilizan el variables que requieren logica


$saludar = function ($name)
{
    return "Hola $name </br>";
};
echo $saludar('Juan');


//Pasando como parametro una funcion anonima
//Utilizar Closure para validar que es una variable anonima

function despedirse(Closure $lang, $name)
{
    return $lang($name);
}

$es = function($name)
{
    return "Hola $name";
};

$en = function($name)
{
    return "</br>Hello $name";
};

echo despedirse($en, 'linda');