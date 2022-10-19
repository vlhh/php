<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
echo fullStackPHPClassName("Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operadorA = 10;


echo "operadorA = " .$operadorA;

$operadores=[
    "a += 5" => $operadorA +=5,
    "a -= 5" => $operadorA -=5,
    "a *= 5" => $operadorA *=5,
    "a /= 5" => $operadorA /=5,
];

var_dump($operadores);

$operadorB = 5;

echo "operadorA = " .$operadorB;
$incrementos = [
    "pos-incremento" => $operadorB++,
    "res-incremento" => $operadorB,
    "pre-incremento" => ++$operadorB,
    "pos-decremento" => $operadorB--,
    "res-decremento" => $operadorB,
    "pre-decremento" => --$operadorB,
    
];

var_dump($incrementos);



/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$varA = 5;
$varB = "5";
$varC = 4;


$comparacoes = [
    "a == b" => ($varA == $varB), //valor é igual
    "a === b"  => ($varA === $varB), //valor e tipos sao iguais?
    "a != b" => ($varA != $varB), //sao diferentes
    "a !==b" => ($varA != $varB), //valore e tipos sao diferentes
    "a > c" => ($varA > $varB),
    "a < c" => ($varA < $varB),
];

var_dump($comparacoes);


/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("operadores lógicos", __LINE__);

$pessoa = new stdClass();
$pessoa->idade =18;
$pessoa->possui_hab =true;
$pessoa ->bebeu =false;

$logicos = [
    "&&" => ($pessoa->idade >= 18 && $pessoa->possui_hab),
    "||" => ($pessoa->possui_hab || $pessoa->bebeu),

];

var_dump($logicos);



/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 5;


$calulos = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];

var_dump($calulos);


fullStackPHPClassSession("exercicios", __LINE__);

/* 1-crie um array com 10 numeros inteiros  e atrves
de um laco de repeticao, diga quantos destes numeros sao pares.
*/

$numeros = array(1,2,3,4,5,6,7,8,9,10,12,14,15,16);
$contador = 0;

for($var=0; $var <= count($numeros); $var++){
    if($var %2 ==0){
        $contador++;
        echo $var . PHP_EOL;;
    
     }
}

var_dump  ($contador) ;



