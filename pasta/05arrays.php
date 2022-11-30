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
$novo_assoc_ksort = $novo_assoc;

//asort($novo_assoc); //ordenação através do valor do item e mantem a chave ao invés de retornar apenas o índice

echo "<h6>ordenação através do valor do item</h6>";
sort($novo_assoc); //ordenação através do valor do item
var_dump($novo_assoc);

echo "<h6>ordenação através da chave do índice - array associativo</h6>";
ksort($novo_assoc_ksort); //ordenação através da chave do índice - array associativo
var_dump($novo_assoc_ksort);


$reverse_array = [
    "A","B","F","Z","X"
];

echo "<h6>ordenação reversa do valor do item</h6>";
$novo_reverse_array = array_reverse($reverse_array, true);
var_dump($novo_reverse_array);


/*
    1 - Segue o ARRAY:
        ["A", "B", "X", "Z", "F", "E", "J", "Ç"]
        -> Imprima este array de forma alfabética
        -> Imprima este array de forma alfabética ao contrário 
*/
$array =["A", "B", "X", "Z", "F", "E", "J", "Ç"];

echo "<h2> alfabetica ao contrario </h2>";
rsort($array);
foreach ($array as $array) {
var_dump ($array);
}

echo "<h2> forma alfabetica </h2>";
 
$array =["A", "B", "X", "Z", "F", "E", "J", "Ç"];
sort($array);
foreach ($array as $array) {
var_dump ($array);
}




/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);




/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);
