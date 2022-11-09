<?php
require __DIR__ . '/../fullstackphp/fsphp.php';
fullStackPHPClassName("Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$curso = "Tecnico em informatica";

var_dump([
    "string" => $curso,
    "strlen" =>strlen($curso),
    "mb_strlen" => mb_strlen($curso),
    "substr" => substr($curso,12),
    "mb_substr" => mb_substr($curso,11),
    "strtoupper" => strtoupper($curso),
    "mb_strtoupper" => mb_strtoupper($curso),
    "strtolower" => strtolower($curso),
    "mb_strtolower" =>  mb_strtolower($curso),
]);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);
/*
    1-crie um vetor com 5 palavras e atraves de um laco de repeticao,identifique
    a quantidade de letras de cada palavra

    2-crie um laco de repeticao que transforme cada palavra para maiusculo
*/


$vet_palavra=["Maca", "abacaxi", "luva", "vinicius" ,"kleber"];
$contador = 0;
while($contador < count($vet_palavra)){

    $letras = mb_strlen ($vet_palavra[$contador]);
    echo "<h5>a palavra {$vet_palavra[$contador]} tem {$letras} letras </h5>";

    $contador++;
}

$contador = 0;
while($contador < count($vet_palavra)){

    $transfoorm = mb_strtoupper ($vet_palavra[$contador]);
    echo "<h5>a palavra {$vet_palavra[$contador]} = {$transfoorm} letras </h5>";

    $contador++;
}

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$substituicao = "programacao para internet";

echo "<h5>{$substituicao}</h5>";

echo "<h5>" . str_replace("internet", "mobile", $substituicao) . "</h5>";

echo "<h5>" . str_replace (["programacao", "internet"], array("desenvolvimento", "mobile"), $substituicao) . "</h5>";


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$site = "https://www.google.com.br/search?q=univates&source=hp&ei=PEBPY4_CKInM1sQPu_ukmAQ&iflsig=AJiK0e8AAAAAY09OTHPSTSx2z6xaHoD1LqcoykcExz5v&ved=0ahUKEwiP0LavgOv6AhUJppUCHbs9CUMQ4dUDCAg&uact=5&oq=univates&gs_lcp=Cgdnd3Mtd2l6EAMyCwgAEIAEELEDEIMBMgsIABCABBCxAxCDATIFCAAQgAQyBQgAEIAEMgsILhCABBDHARCvATIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgoILhDqAhC0AhBDOg0ILhDUAhDqAhC0AhBDOgoIABDqAhC0AhBDOhEILhCABBCxAxCDARDHARDRAzoOCC4QgAQQsQMQgwEQ1AI6CAguELEDEIMBOggILhCABBDUAjoFCC4QgAQ6DgguELEDEIMBEMcBENEDOggIABCABBCxAzoLCC4QgAQQsQMQgwFQuAZY6Axgxw5oCXAAeACAAQCIAQCSAQCYAQCgAQGwAQo&sclient=gws-wiz";

mb_parse_str($site, $siteComParametros);

var_dump([
    "site" => $site,
    "parametros" => $siteComParametros,
]);