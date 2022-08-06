<?php
/////////////////
//Practice Code//
////////////////

class Cars {

    // class properties with Access Modifiers
    public $wheel_count = 4; // <- public property: can be used throughout the whole program
    private $door_count = 4; // <- private property: make available to the current class Only
    protected $body_color = "Blue"; // <- protected property: only available to current class & any sub classes "extends"

    static $seat_count = 2; // <- static property: does not need an instance of Class


    static function car_detail() {
        echo Cars::$seat_count;
    }

}

$corvette = new Cars();
echo $corvette->wheel_count;

echo "<br>";
echo Cars::$seat_count; // <- static property call
echo "<br>";
Cars::car_detail(); // <- static method call

?>