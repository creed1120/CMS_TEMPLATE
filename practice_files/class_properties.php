<?php
/////////////////
//Practice Code//
////////////////

class Cars {

    // class properties
    var $wheel_count = 4;
    var $door_count = 4;


    function car_detail() {

        return "This car has " . $this->wheel_count . " wheels.";

    }


}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count = 10;

echo "<br>";

echo $bmw->car_detail();

?>