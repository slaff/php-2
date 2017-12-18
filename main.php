<?php
//declare(strict_types=1);
require_once 'autoload.php';

use Libs\{Db\Customer, Db\Repository};

$config = include_once __DIR__.'/config/application.config.php';

// TODO: Get from DB a customer with id 4

$repository = new Repository($config['db']);
$customer = $repository->findById(4);

// We work with the entity object

$customer->lastName = "Spirou";

// TODO: Store the data in the database
$repository->persist($customer);
