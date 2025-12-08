<?php declare(strict_types=1);


/* class Myvalue{
    public static $attendans1= 38+12;
    public static $attendans2= "N2";

    public static function attendance_1(){
       echo  self::$attendans1;
    }
}

class Yourvalue extends Myvalue{
    public static $attendans2 = 20+20/5*3-4;
    public static function attendance_2(){
        echo self::$attendans2;
    }

}

echo Myvalue::$attendans1;  
 Myvalue::attendance_1();
Yourvalue::attendance_1(); */


/* class Id_giver{
 public static $counter=0;
 public $name;
 public $id;
 public  function __construct($name){
    self::$counter++;
    $this->id=self::$counter;
    $this->name=$name;
 }
 public function info(){
    return "Id : {$this->id} , name of participant: {$this->name}";
     }
}

$user= new Id_giver("Abdlla");
echo  $user->info() . "<br>"; */
/* ----------------------------------- */
class Test_0{
  public static function test(){
    return __CLASS__ . "<br>";

  }
     }
/* -------------------------------------- */
echo Test_0::test();  
echo __DIR__  . "<br>";   
/* -------------------------------------- */
function math(&$value){
  $value *= 10;
}
$value_giver=35;
  math($value_giver);
echo $value_giver . "<hr>";


class User{
  public static $veriable=0;
  public $id;
  public $name;
  public function __construct($name){
    self::$veriable++;
    $this->id=self::$veriable++;
    $this->name=$name;
   
}
public function outputs(){
   return "Id of user : {$this->id }<br> name of user{ $this->name}";  
}
}

$user_data= new User("Mirzabek");
echo $user_data->outputs() . "<hr>";
/* ---------------------------------------- */


  $test_3="My name is Peter";

switch ($test_3){
  case "My name is Jhon": echo "you are welcome to job Jhon" . "<br>"; break;
  case "My name is Alexis": echo "you are welcome to job Alexis" . "<br>"; break;
  case "My name is Peter": echo "you are wanted. freeze and lay to ground" . "<br>" ; break ; 
 }
 
 echo round(sqrt(7054));
 $massiv=["my fault"];
$massiv[] = "true";
 array_push($massiv,55,"my name isn't Jhon"); 
  




 print_r( $massiv) ;

 echo  "<hr>";
 




?> 



