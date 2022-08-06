<?php
/////////////////
//Practice Code//
////////////////

class Cars {

    // class properties with Access Modifiers
    public $wheel_count = 4; // <- private property: make available to the current class Only


    // this is called automatically when class is instantiated
    function __construct() {
        echo $this->wheel_count;
    }

}

$bmw = new Cars();

?>