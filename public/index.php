<?php
//declare(strict_types=1);
require_once __DIR__.'/../vendor/autoload.php';

use Libs\{Db\Customer, Db\Repository};


$config = include_once __DIR__.'/../config/application.config.php';

// Read the XML
$data = file_get_contents(__DIR__.'/../composer.json');

$json = json_decode($data, true);

// TODO: 1. Change "src\/Libs\/" => "src\/"
//       2. Save/Display the array again as JSON

// $json["require"]["swiftmailer/swiftmailer"] = "^132323";

echo json_encode($json);


