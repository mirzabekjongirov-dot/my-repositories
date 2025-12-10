<?php
$market=["Sabzi","Kartoshka","piyoz","rediska"];
$number=array(12,13,14,19,25,26,29,21,35,30);
sort($market);
rsort($number);

print_r($market);
/* ----------------- */


echo  "<br>";
$cars=["BMW"=>"V10","TOYOTA"=>"V6","Subaru"=>"V8","Lexus"=>"V8"];
asort($cars, SORT_NATURAL);
print_r($cars);


/* ----------------- */
echo  "<br>";
ksort($cars, SORT_NATURAL);
foreach($cars as $key => $value ){
    echo $key . "-" . $value ;
     echo  "<br>";  
}









?>