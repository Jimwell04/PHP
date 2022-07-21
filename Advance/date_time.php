<?php 

echo date_default_timezone_set("Asia/Manila");
echo date_default_timezone_get();
echo date("Y/m/d h:i:s A");

$date = "January 04, 2005 12:30:40 AM";
echo $date;

echo date("m/d/Y h:i:s A", strtotime($date));


?>
