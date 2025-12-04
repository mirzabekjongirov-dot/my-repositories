
<?php

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


class Id_giver{
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




$user= new Id_giver('Abdlla');
echo  $user->info();


?>
