<?php
//declare(strict_types=1);
require_once __DIR__.'/../autoload.php';

use Libs\{Db\Customer, Db\Repository};


$config = include_once __DIR__.'/../config/application.config.php';

echo "<html><body>";
echo "<pre>";

$pattern = '//'; 
$text = '<a href="URL"></a>'; // TODO: match the URL and echo it

if(preg_match($pattern, $text, $matches)) {
   echo "Valid Email Address";
   var_dump($matches);
}
else {
   echo "Not Valid Email Address";
}

echo "</pre>";
echo "</body></html>";
