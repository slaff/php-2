<?php
//declare(strict_types=1);
require_once 'autoload.php';

use Libs\{Db\Customer, Db\Repository};


$a = "b";
$b = 123;

// Variable-Variable Example
echo $$a; // => ${"b"}  => 123
// $object->$name // $object->id


$config = include_once __DIR__.'/config/application.config.php';

// Get from DB a customer with id 4
$repository = new Repository($config['db']);
$customer = $repository->findById(4);
if($customer == null) {
  $customer = new Customer();
}

echo $customer->firstname."\n";

// We work with the entity object

$customer->lastName = "Spirou";

// TODO: Store the data in the database
$repository->persist($customer);
