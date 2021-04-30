<!-- discusion notes!!!! -->
 <!-- exclusive for notes -->


<?php
// //TRAITS
//     trait message1{
//         public function msg1(){
//             echo "PHP OOP";
//         }
//     }

//     trait message2{
//         public function msg2(){
//             echo "OOP is clean";
//         }
//     }

//     class Announcement1{
//         use message1;
         
//     }

//     class Announcement2{
//         use message1,message2;
//     }

//     $obj1 = new Announcement1();
//     $obj1->msg1();
//     echo "<br>";
//     $obj2 = new Announcement2();
//     $obj2->msg1();
//     echo "<br>";
//     $obj2->msg2();

    // //ABSTRACT 
    // abstract class Car {
    //     public $name;
    //     public function __construct($name){
    //         $this->name = $name;
    //     }
    //     abstract public function introModel():string;
    // }

    // class Lotus extends Car{
    //     public function introModel():string{
    //         return "British cars rule! I'm a {$this->name}!\n";
    //     }
    // }

    // class Subaru extends Car{
    //     public function introModel():string{
    //         return "I am a samurai sportscar. I'm a {$this->name}!\n";
    //     }
    // }

    // $lotus = new Lotus("Elise");
    // echo $lotus->introModel();
    // $subaru = new Subaru ("BRZ");
    // echo $subaru->introModel();









    // PHP OOP 
    // class Polygon{
    //     const OPENING = "Creating a polygon ...";
    //     public $side;
    //     public $measurement;
    //     //protected $measurement;
    //     public $unit;
    //     //private $unit;

    //     public function __construct($unit){
    //         $this->unit = $unit;
    //     }
    //     protected function set_unit($unit){
    //         $this->unit = $unit;
    //     }

    //     protected function set_measurement($measurement){
    //         $this->measurement = $measurement;
    //     }

    //     public function openingMessage(){
    //         echo self::OPENING;
    //     }

    //     // function set_side($side){
    //     //     $this->$side = $side;   

    //     // }

    //     // function get_side(){
    //     //     return $this->$side;
    //     // }

    //     // function __construct($side,$measurement,$unit){
    //     //     $this->$name = $side;
    //     //     $this->$measuremnet = $measurement;
    //     //     $this->$unit= $unit;
    //     // }
 
    //     // function __destruct(){
    //     //     echo "The shape is containing {$this->$side} and the unit is {$this->$unit}";
    //     // }
    // }

    // class Square extends Polygon{
    //     public function __construct($unit,$measurement){
    //         $this->unit = $unit;
    //         $this->measurement = $measurement;
    //     }
    //     public function message(){
    //         // echo Polygon::OPENING;
    //         echo "I am a square polygon with unit {$this->unit} with measurement {$this->measurement}";
    //     }
    // }
    // $square = new Square("inches",3);
    // $square->message();
    // $polygon= new Polygon("meters");
    // $polygon->openingMessage();
    // //$square = new Polygon(4,2,"inches");
    // //$square->$side = 4  ;
    // // $square->set_side(4);
    // // $square->get_side();
    // // $square->side = 4 ;
    // // $square->set_unit("inches");
    // // $square->set_measurement();
    // //$suqre->$measurement = 2;
    // //$square->$unit = "inches";
    // echo $square->side;

?>