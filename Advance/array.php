<?php

$fruits = array("mango", "apple", "banana", "orange");

print_r($fruits);

$total = count($fruits);
echo $total;

for ($x = 0; $x < $total; $x++) {
  
  echo $fruits[$x];
  
}

if (in_array("mango",$fruits)) {
  
  echo "Mango is available";
  
}

$fruits = array("mango" => 50, "apple" => 150, "banana" => 200, "orange" => 20);

print_r($fruits);

$nums = array(4,3,1,2,6,8,9,7,5,10);
print_r($nums);

sort($nums);

print_r($nums);

?>
