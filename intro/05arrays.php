<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para arrays");



/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$array=[
    "php",
    "javascript",
    "java"
];


$assoc = [
    "lan1" => "php",
    "lan2" => "javascript",
    "lan3" => "java",
];

array_unshift($array, "c#");
array_push($array, "assembly");

var_dump($array,$assoc);

$novo_array = ["ruby"] + $array;

$novo_assoc = ["Lang4" => "c#"] + $assoc;

var_dump($novo_array, $novo_assoc );

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

sort($novo_assoc);

ksort($novo_assoc)

var_dump($novo_assoc);


/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);


/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);
