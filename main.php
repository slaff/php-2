<?php

// [_a-zA-Z][0-9a-zA-Z_]*

// Data types 

// (strings, integers, floats, booleans, arrays, resources, and null)

$lastName = "Smith";
echo 'John $lastName'."\n"; 
echo "John $lastName\n";

// integers
$age = 20;

// floats
$age = 20.5;

// booleans
$success = true; // false

// arrays
$rows = [ 3, 6, 9 ];
echo count($rows); // number of elements: 3
echo $rows[0]; // 3
echo $rows[2]; // 9
echo $rows[0] + $rows[1]; // 9

$rows = [
  "name" => "John",
   4 => 12,
  "lastName" => "Smith",
  "age" => 20,
   5=> 13,
   6=> 14,
];

echo $rows["name"]; // John
echo $rows["age"] . $rows[4]; // "2012"

$rows = [
  0 => [ "name"=>"John", "age"=> [12, 342] ],
  1 => [ "name"=>"Peter", "age"=> [22, 33] ],
  2 => [ "name"=>"Adam", "age"=> [1, 6] ],
];

echo $rows[2]["age"]; // 42

echo $rows[2]["age"][1] . $rows[1]["age"][0]; // 6 and 22

// and null

$var; // == $var = null

echo "[one". null. "two]"; // [onetwo]
echo 2 + null; // 2+0 = 2

// resources
$fp = fopen("/tmp/data.txt","r");
fread($fp, 200);
//...
fclose($fp);




?>
