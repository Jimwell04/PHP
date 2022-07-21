<?php 

$text = "Welcome to PHP ";

$x = 0;

while ($x <= 10) {
  
  echo $x.". ".$text;
  
  $x++;
}

$x = 0;

do {
  
  echo $x.". ".$text;
    
  $x++;
  
} while ($x <= 10);

for ($x = 0; $x <= 10; $x++) {
  
  echo $x;
  
}

$arr = array("Hi", "Hello", "What's up", "Heey", "Zup", "Yow");

foreach ($arr as $r) {
  
  echo $r;
  
}

?>
