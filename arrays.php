
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    <input type="number" name="son_1"><br>
    
    <button type="submit">send</button>
    </form>
</body>
</html>




<?php
$input1=$_GET["son_1"];



function calculator($input){

  $son=1;
   for($i=1; $i<=$input; $i+2 ){
     
    $son+=$i;

   }                
   return $son;
    
}
    echo calculator($input1);


?>