<?php  date_default_timezone_set("Asia/Tashkent");


$extra=strtotime("-17 days ");
echo date("d-m",$extra) . "<br>";
 /* -------------------- */
 
$extra_1=mktime(12,07,23,12,9,2025);
echo date("Y-d-m h:i:s",$extra_1);


?>