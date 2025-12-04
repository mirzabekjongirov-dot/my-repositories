<?php 
"<pre>";
class Students{
    public $age;
    public $weight;
    public $height;
    public $name_of_university;
    public $apartment;
    public $dagree;
    public function set_data($age,$weight,$height,$name_of_university,$apartment,$dagree ){
        $this->age=$age;
         $this->weight=$weight;
          $this->height=$height;
           $this->name_of_university=$name_of_university;
            $this->apartment=$apartment;
             $this->dagree=$dagree;
             return;

    }
     
}

$datas_of_student_1= new Students();
$datas_of_student_1->age=19;
$datas_of_student_1->weight=82;
$datas_of_student_1->height=1.93;
$datas_of_student_1->name_of_university="Harvard";
$datas_of_student_1->apartment="Hill Stone,13 building,4 floor,11 door";
$datas_of_student_1->dagree="bakalavr";
 
foreach($datas_of_student_1 as $key=>$value){
    echo $key . "-" . $value . "<br>"  ;
};
"</pre>";
echo "<hr>";

 
$a=13;
$b= $a<=20 ? "the answer is true" : "try again, that was false";

echo $b;

echo "<hr>";


switch($a){
    case 13:
        echo"it's a lower than \$b"; break;
    case 20:
        echo"the calculation went wrong"; break;
    default:
    echo "looks like it's an answer of another question";

 }



?>
