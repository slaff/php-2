<?php
//declare(strict_types=1);
require_once __DIR__.'/../vendor/autoload.php';

use Libs\{Db\Customer, Db\Repository};


$config = include_once __DIR__.'/../config/application.config.php';

// read an XML file

$xml = simplexml_load_file( __DIR__.'/../data/produce.xml' );

/*
<?xml version = "1.0" encoding = "UTF-8" ?>
<produce xmlns:ea = "test">
    <vegetables>
        <vegetable unit = "pound">
            <name> tomatoes </name>
            <price season="high"> 2.99 </price>
            <price season="low"> 2.99 </price>
        </vegetable>
        <vegetable unit = "pound">
            <name> olives </name>
            <price season="high"> 1.99 </price>
            <price season="low"> 1.22 </price>
        </vegetable>
    </vegetables>
</produce>
*/

// get the price of Tomatos in High season
$xml->vegetables->vegetable[0]->price[0] = 4.55;

echo $xml->asXML();





