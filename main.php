<html>
<body>
<?php
// Functions

define('MAX_INT', 10);

$d = 10; // GLOBAL variable

function plus(float $a, float $b) {
   global $d;
   echo "[$d]".MAX_INT; // constants don't need the global keyword

   $c = 5; // LOCAL variable

   return $a + $b;
}

function minus($a, $b) {
   return $b - $a;
}

plus(1,2);
?>
</body>

<?php
  echo "<!-- comment -->";
?>

<?= "<!-- comment -->"; ?>
</html>
