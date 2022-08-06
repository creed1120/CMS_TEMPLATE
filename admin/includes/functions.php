<?php
    /**
     * Autoload classes
     * 
     */

    function class_auto_loader($class) {
        $class = strtolower($class);

        $path = 'includes/' . $class . '.php';

        if(is_file($path) && !class_exists($class)) {
            require_once($path);
        } else {
            die("File {$path} cannot be found.");
        }
    }
    spl_autoload_register('class_auto_loader');


    /**
     * Redirect with the header() function
     * @param $location
     *
     */
    function redirect($location) {
        header("Location: {$location}");
    }

?>
