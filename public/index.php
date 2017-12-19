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

$pattern = '/^\$_{2}(\w{1,})\(\)$/i'; // Magic Method Matching
$text = '$__SoMe_thInG()'; // -> $__someThing()

$result = preg_replace_callback($pattern, 'camelCase',$text);

var_dump($result);

if(preg_match($pattern, $text, $matches)) {
   echo "Valid Variable";
   var_dump($matches);
}
else {
   echo "Not Valid Variable";
}

echo "</pre>";
echo "</body></html>";
