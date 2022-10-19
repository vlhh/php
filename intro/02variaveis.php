<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);


$nome = "vitoria";
$cidade = "teutonia";
$idade = 18;

echo "ola me chamo " . $nome . " moro em " . $cidade . " tenho " . $idade . " anos";

$pre_formatado = "<h4> ola me chamo %s  moro em %s tenho %d anos</h4>";
printf($pre_formatado, $nome, $cidade,$idade);

var_dump([
    "variavel" => $idade
]);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;
$true2 = "true";

echo "<h4>TRUE == TRUE ?" . ($true === $true2) . "</h4>";

$maior_idade = 19;

$maior = ($maior_idade >=18);

echo "MAIOR =" . ($maior ? "sim" : "nao");

var_dump([$true, $false, $maior_idade, $true === $true2]);


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<h3>titulo H3 </h3> <h4> titulo H4 </h4>";
$cleanCode = call_user_func("strip_tags", $code);

echo $code;
echo $cleanCode;

var_dump([
    'code' => $code,
    'cleanCode' =>$cleanCode
]);


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);



fullStackPHPClassSession("exercicios", __LINE__);

/* 1- crie dois objetos com os atributos nome e idade.
preencha os atributos dos dois objetos e em seguida
faça um teste mostrando qual é a pessoa que possui a 
idade mais avançada

*/

$pessoa1 = new stdClass();
$pessoa1->nome = "vitoria";
$pessoa1->idade = 60;

$pessoa2 = new stdClass();
$pessoa2->nome = "vitoria2";
$pessoa2->idade = 30;



if($pessoa1->idade > $pessoa2->idade){
    echo $pessoa1->nome . " é a pessoa com mais idade";
}else if($pessoa2->idade > $pessoa1->idade){
    echo $pessoa2->nome . " é a pessoa com mais idade";
}else{
    echo "ambas tem a mesma idade";
}


/* 2- dado o seguinte texto: <p>ola <span> <i>mundos </i> </span><p>,
realize um comando echo que consiga mostra o texto sem as marcacoes em html
*/

$texto = "<p>ola <span> <i>mundos </i> </span><p>";
$cleanCode = call_user_func("strip_tags", $texto);


echo $texto;
echo $cleanCode;


