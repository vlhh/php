<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "Olá Mundo";


/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print("Olá Mundo");
$hello = "Ola mundo";

echo "<h1>{$hello}</h1>";

//imprime um array
$array =  ["Trutonia", "lajeado" , "estrela"];
print_r($array, true);

$vetor = print_r($array, true);
echo "<pre>" . $vetor . "</pre>";






/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
//dar uma saida em uma variavel pre-formatada, exemplo seria um artigo

$article ="<article><h2>%s</h2><p>%s</p></article>";
$titulo = "titulo";
$noticia = "texto noticia";

printf($article, $titulo, $noticia);
sprintf($article, $titulo, $noticia); //mesma coisa so que em formato de retorno

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */




fullStackPHPClassSession("printf", __LINE__);

$company = "<article><h2>%s</h2><p>%s</p></article>";
$array_company = ["UNIVATES", "Tecnico em infomatica"];
vprintf($company, $array_company);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

