<?php 
$a="mening ismim Mirzabek";
$b="yOsHiM 17";
$c=[12,"english club",true];
 
echo strlen($a) . "<br>";
echo strpos( $b, 17) . "<br>";
echo strtoupper($a) . "<br>";
echo strtolower($b) . "<br>";
echo trim($a) . "<br>";
echo strrev($b) . "<br>";
echo str_word_count($a);
echo str_replace("mening ismim", "pasportdagi ismim",$a);

    $test_0=explode(" ", $a) ;
 
    print_r($test_0);

    echo substr($a,6,6);
    $d="<br>" . "<p>Lorem, ipsum dolor sit amet consectetur \"adipisicing\" elit. Eius 500\$ non porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. \n Perferendis, eum excepturi fugiat illo qui distinctio delectus nemo animi, eveniet harum aliquid dolorem saepe illum itaque rem! Maxime minus magni aliquid!<p>";

    echo $d . "<br>";
   
    $F=nl2br("My\nname");

    echo $F; 

?>