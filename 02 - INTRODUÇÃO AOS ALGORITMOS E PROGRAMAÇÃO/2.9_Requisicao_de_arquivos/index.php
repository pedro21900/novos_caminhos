<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10.2');
 
/*
*
*/
PHPClassSession('include,include_onde', __LINE__);


include "file.php";
echo "<p>Continue</p>";

//include "header.php";
include __DIR__."/header.php";
var_dump(__DIR__);
$profile = new stdClass();
$profile -> name = "Pedro";
$profile -> company ="Visionset";
$profile -> email = "pedro21900@hotmail.com";
var_dump($profile);

include __DIR__."/profile.php";

PHPClassSession('require,require_onde', __LINE__);

require "file.php";
echo "<p>Continue</p>";