<?php
for($i = 1; $i < 5 ; $i++ ){
  echo "ini adalah looping ke $i <br>";
}

echo "<br>";
// looping while
$x = 1;

while($x <= 5) {
  echo "$x - satu Sampai lima<br>";
  $x++;
}

echo "<br>";
// looping do while
$x = 1;

do {
  echo "$x - satu Sampai lima<br>";;
  $x++;
} while ($x <= 5);

echo "<br>";
// looping foreach start
$animals = array("cat", "dog", "snake", "ant", "lion"); 

foreach ($animals as $animal) {
  echo "$animal <br>";
}


// looping foreach end
?>

