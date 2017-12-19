<?php
//declare(strict_types=1);
require_once __DIR__.'/../vendor/autoload.php';

use Libs\{Db\Customer, Db\Repository};


$config = include_once __DIR__.'/../config/application.config.php';

$repository = new Repository($config['db']);
$customer = $repository->findById(4);

// We work with the entity object
$customer->lastname = "Spyrou";

// TODO: Store the data in the database
$repository->persist($customer);
