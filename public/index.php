<?php
//declare(strict_types=1);
require_once __DIR__.'/../autoload.php';

use Libs\{Db\Customer, Db\Repository};


$config = include_once __DIR__.'/../config/application.config.php';

echo "<html><body>";
echo "<pre>";

$pattern = "/^\\$([a-zA-Z_]\w{0,})$/"; //
$text = '$a';

if(preg_match($pattern, $text, $matches)) {
   echo "Valid Variable";
   var_dump($matches);
}
else {
   echo "Not Valid Variable";
}

echo "</pre>";
echo "</body></html>";
