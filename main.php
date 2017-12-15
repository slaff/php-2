<?php
// Conditional and looping constructs

//for
for($i=0; $i < 10; $i++) {
  // ...
  if(!($i == 3)) {
    $i = $i + 2;
    continue;
  }  

  if($i == 5) {
    break;
  }


  echo $i."\n";
}

echo "Finish\n";

