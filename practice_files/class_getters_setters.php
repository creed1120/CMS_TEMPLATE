<?php
/////////////////
//Practice Code//
////////////////

class Cars {

    // class properties with Access Modifiers
    private $door_count = 4; // <- private property: make available to the current class Only


    function get_values() {

        echo $this->door_count;
        
    }

    function set_values($value) {

       $this->door_count = $value;
        return $value;
        
    }

}

$bmw = new Cars();

echo $bmw->get_values();
echo "<br>";
echo $bmw->set_values(8);

?>