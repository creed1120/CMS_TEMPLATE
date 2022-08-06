<?php

    $my_number = $_GET["number"];
    $my_email = $_GET["email"];
    $my_phone = $_GET["phone"];

    echo $my_number . "<br>";
    echo $my_email . "<br>";
    echo $my_phone . "<br>";


    if ($my_number == 50) {
        echo "<h1>We are showing this text because form number is $my_number</h1>";
    }else {
        echo "<h1>The form number is not correct</h1>";
    }