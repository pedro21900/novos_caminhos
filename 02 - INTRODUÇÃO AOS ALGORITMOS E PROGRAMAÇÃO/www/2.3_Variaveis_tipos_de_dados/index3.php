<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula-2.3');
 
/*
*
*/
$fistName = "Pedro Lennon Oliveira da Silva";

PHPClassSession($fistName, __LINE__);

PHPClassSession(' Booleano ', __LINE__);
// $true = true;
// $false = false;

// var_dump($true, $false);

// $userAge = 52;
// $bestAge = ($userAge > 50);
// var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;
var_dump($a, $b, $c, $d, $e);

if ($a || $b || $c || $d || $e) {
    var_dump(true);
} else {
    var_dump(false);
}

PHPClassSession(' Call backs ', __LINE__);
 $code ="<articles><h1> Call Backs </h1></articles>";
 $codeclean = call_user_func ("strip_tags",$code);
 var_dump($code,$codeclean);

PHPClassSession(' Outros tipos de Variaveis ', __LINE__);