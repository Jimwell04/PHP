<?php 

$mango = array("color" => "green", "size" => "big");

if ($mango["color"] == "yellow" AND $mango["size"] == "small") {
  
  echo "Mango is available";
  
} elseif ($mango["color"] == "green" AND $mango["size"] == "big") {
  
  echo "Mango is available";
  
} else {
  
  echo "Mango is not available";
  
}

if ($mango["color"] == "yellow" OR $mango["size"] == "big") {
  
  echo "Mango is available";
  
} else {
  
  echo "Mango is not available";
  
}

if ($mango["color"] == "green" xor $mango["size"] == "big") {
  
  echo "Mango is available";
  
} else {
  
  echo "Mango is not available";
  
}


?>
