<?php
// Conditional and looping constructs
$age = 20;
$b = "213123213sadfsafsf";


$condition1 = $age > 20 && $age < 60; // all parts MUST be true
$condition2 = $age == 13 || $age == 66;// at least one part MUST be true

$condition3 = $age == 13  || $age == 66 && ($age == 10 || $age > 3 + $b) + null ; // ? 
            //                  false  && ( false || 

if($condition3) {
  echo "Yes, it is true";
}

$ticketPrice = 0;

if($age < 2) {
  $ticketPrice = 0;
}
else if($age > 2 && $age < 16) {
  $ticketPrice = 30;
}
else {
  $ticketPrice = 60;
}


echo $ticketPrice; // 60


// looping constructs
$rows = [
    "John",
    20,
];


echo "\n";

//for
for($i=0; $i < count($rows); $i++) {
   echo "$i => ".$rows[$i]."\n"; // 0 => $rows[0]; 0=>John 
}

exit;

//foreach
foreach($rows as $key => $value) {
   echo $key . " = " . $value ."\n";
}


//while
while($a == 22) {
  echo "THERE";
}

//do .. while
do {
  echo "HERE"; 
}
while($a > 22);






























