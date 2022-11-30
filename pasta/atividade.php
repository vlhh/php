<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>Nome: Vitória </p>
    <p>Data: 25/10/22</p>
    <p>Nome da disciplina: Desevolvimento de aplicações para internet</p>
    <p>Nome do professor: Jonas Dhein</p>
</body>
</html>


<?php

echo "<hr>";

echo "<h4>1 - Crie um array com 5 registros e imprima na tela, o array deve 
armazenar valores do tipo string; </h4>";
/*
    1 - Crie um array com 5 registros e imprima na tela, o array deve 
    armazenar valores do tipo string;
*/
$array=[
    "amarelo",
    "azul",
    "verde",
    "laranja",
    "preto",
];
var_dump($array);


echo "<hr>";
echo "<h4>2 - Realize uma inserção no início do array com um 
novo item e imprima o resultado em tela; </h4>";

/*
2 - Realize uma inserção no início do array com um novo item e imprima o resultado em tela;
*/
$array2 = [
    "lan1" => "uno",
    "lan2" => "palio",
    "lan3" => "celta",
];

array_unshift($array2, "corsa");

var_dump($array2);

echo "<hr>";
echo "<h4>3 - Utilize a função in_array para localizar um determinado 
elemento dentro do array, realize o teste duas vezes, uma com um item 
que existe e outra com um item inexistente no array, imprima o resultado 
da consulta em tela (Existe ou não existe tal informação); </h4>";
/*
Utilize a função in_array para localizar um determinado elemento dentro do array, realize 
o teste duas vezes, uma com um item que existe e outra com um item inexistente no array, 
imprima o resultado da consulta em tela (Existe ou não existe tal informação);
*/

$array2 = [
    "lan1" => "uno",
    "lan2" => "palio",
    "lan3" => "celta",
];
var_dump($array2);

if(in_array("uno", $array2)){
    echo "TEM UNO!";
}else{
    echo "Nao existe";
}

echo "<br>";

if(in_array("gol", $array2)){
    echo "TEM GOL!";
}else{
    echo "Nao existe gol";
}


echo "<hr>";
echo "<h4>4 - Crie uma variável com uma frase qualquer e através de um método em PHP identifique
o tamanho de caracteres presentes na frase; </h4>";

/*
4 - Crie uma variável com uma frase qualquer e através de um método em PHP identifique
o tamanho de caracteres presentes na frase;
*/

$vet_palavra=["desconstitucionalizar"];
$contador = 0;

while($contador < count($vet_palavra)){

    $letras = mb_strlen ($vet_palavra[$contador]);
    echo "<h5>a palavra {$vet_palavra[$contador]} tem {$letras} letras </h5>";

    $contador++;
}

echo "<hr>";
echo "<h4>5 - Converta a frase acima para CARACTERES MAIÚSCULOS, faça isso de duas
 formas, com os dois exemplos que vimos em aula.</h4>";

/*
Converta a frase acima para CARACTERES MAIÚSCULOS, faça isso de duas formas, 
com os dois exemplos que vimos em aula.
*/


$curso = "Crie uma variável com uma frase qualquer e através de um método em PHP 
            identifique o tamanho de caracteres presentes na frase";

var_dump([
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),

]);

