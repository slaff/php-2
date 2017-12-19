<?php
//declare(strict_types=1);
require_once __DIR__.'/../autoload.php';

use Libs\{Db\Customer, Db\Repository};


$config = include_once __DIR__.'/../config/application.config.php';

echo "<html><body>";
echo "<pre>";

function camelCase(array $matches) {
    // SoMe_thInG -> someThing
    $name = $matches[1]; // SoMe_thInG

    $words = explode("_", $name);
    $newName = strtolower($words[0]); // SoMe -> some
    for($i=1; $i< count($words); $i++) {
        $newName .= ucfirst(strtolower($words[$i])); 
    }

    return '$__'.$newName."()";
}

$pattern = '/^((\w+\.{0,1}\w+)+)@((\w+\.{0,1}\w+)+)$/i'; // Magic Method Matching
$text = 'christina.spyrou.23@localhost'; // -> $__someThing()

if(preg_match($pattern, $text, $matches)) {
   echo "Valid Email Address";
   var_dump($matches);
}
else {
   echo "Not Valid Email Address";
}

echo "</pre>";
echo "</body></html>";
