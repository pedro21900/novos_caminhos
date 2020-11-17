<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10.3');
 
/*
*
*/
include __DIR__."/functions.php";

PHPClassSession('functions', __LINE__);

    var_dump(functionName("Pedro","é um ","gatão"));
    var_dump(calcIMC(12,15));

PHPClassSession('global acess', __LINE__);

var_dump(calcIMC_Global());


PHPClassSession('static arguments', __LINE__);


PHPClassSession('dinamic argments', __LINE__);
var_dump(myTeam());
var_dump(myTeam("Fernando"));
var_dump(myTeam("Fernando","Pedro"));