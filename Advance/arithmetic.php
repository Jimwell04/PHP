<?php 

function arit($op, $x, $y) {
  
  switch ($op) {
    
    case "+":
      return $x + $y;
    break;
    
    case "-":
      return $x - $y;
    break;
    
    case "*":
      return $x * $y;
    break;
    
    case "/":
      return $x / $y;
    break;
    
    case "%":
      return $x % $y;
    break;
    
    case "**":
      return $x ** $y;
    break;
    
    default:
      echo "Systax error invalid operator";
      
  }
  
}


?>