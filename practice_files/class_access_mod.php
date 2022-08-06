<?php
/////////////////
//Practice Code//
////////////////

class Cars {

    // class properties with Access Modifiers

    public $wheel_count = 4; // <- public property: can be used throughout the whole program
    private $door_count = 4; // <- private property: make available to the current class Only
    protected $body_color = "Blue"; // <- protected property: only available to current class & any sub classes "extends"


    function car_detail() {

        return $this->door_count;

    }


}

$corvette = new Cars();
echo $corvette->car_detail();

echo "<br>";

?>