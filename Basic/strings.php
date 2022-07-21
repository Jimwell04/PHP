<?php 

// Datatypes

$name = "Juan";
$age = 22;
$height = 5.5;

$text = $name." "."is"." ".$age." "."years old"." ".$name." "."have"." ".$height." "."height.";

$text2 = str_replace(" ","",$text);

echo $text." "."|"." ".strlen($text)." "."String lenght"." "."|"." ".strlen($text2)." "."Character";

?>
