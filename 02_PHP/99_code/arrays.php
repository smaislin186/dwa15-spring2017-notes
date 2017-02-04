<?php
function dump($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}

$translations =
[
    'hello' => 'hola',
    'goodbye' => 'adios',
];

var_dump($translations);
