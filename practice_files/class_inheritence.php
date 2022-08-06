<?php
/////////////////
//Practice Code//
////////////////

class Cars {

    var $wheels = 4;

    function greeting() {
        return "Hello Student";
    }

}

$bmw = new Cars();



class Trucks extends Cars {

}

$tacoma = new Trucks();
echo $tacoma->wheels . "<br>";

echo $tacoma->greeting();

?>