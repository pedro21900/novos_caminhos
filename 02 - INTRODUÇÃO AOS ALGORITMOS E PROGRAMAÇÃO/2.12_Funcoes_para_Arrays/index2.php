<?php
declare(strict_types=1);
require __DIR__ . '/../framework/config.php';
PHPClassName('Exemplo Prático vetores');
 
/*
*
*/
PHPClassSession('Exemplo Prático', __LINE__);

$profile=[
    "name" =>"Pedro Lenonn Oliveira da Silva",
    "company"=> "Vibe Tecnologia",
    "mail" => "Pedro@hotmail.com",
];

$template = <<<TPL
<articles>
    <h1>{{name}}</h1>
    <p>{{company}}<br>
        <a href=mailto{{mail}}>Enviar email </a>
    </p>
</articles>
TPL;

echo $template;
echo str_replace(
    array_keys($profile),
    array_values($profile),
    $template
);

$replaces = "{{".implode("}}&{{",array_keys($profile))."}}";

var_dump($replaces);

var_dump(explode("&",$replaces));

echo str_replace(
    explode("&",$replaces),
    array_values($profile),
    $template
);