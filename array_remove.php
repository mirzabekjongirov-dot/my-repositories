<?php
$b=[1=>"result-1",2=>"result-2",3=>"result-3",4=>"result-4"];
$a=["my name is Jhon Smith", true,  12=>"my name is Mirzabek", 7=>"My name is Dave", false];
var_dump($a)  ;
echo "<br>";
print_r (array_splice($a,0,1));
echo "<br>";
$result=array_diff($b,$a);
print_r($result);





?>