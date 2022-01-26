<?php

$frontend = [
    'frontend'=>'javascript'
];
$backend = [
    'backend'=>'php',
    'framework'=>'laravel'
];

var_dump($frontend + $backend);

echo "----------------------------------- <br>";

$front = ['javascript'];
$back = ['php','laravel'];
var_dump(array_merge($front, $back));