<?php
        //model 1
    //$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

        //model 2
    $age["UCUP"] = "35";
    $age["ASEP"] = "28";
    $age["LUBIS"] = "42";
    $age["NUR"] = "53";
    $age["SUKANERIMA"] = "60";

    header("Content-Type: application/json");
    echo json_encode ($age);