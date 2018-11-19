<?php
    $number = 20;
    if ($number % 2 == 0) {
        echo "So chan";
    } else {
        echo "So le";
    }

    $result = ($number % 2 == 0) ? "So chan" : "so le";
    echo $result;

    $n = $number % 2;
    if ($number >=0 && $n == 0){
        $result = "Nguyen duong chan";
    } else if ($number >=0 && $n != 0){
        $result = "Nguyen duong le";
    } else if ($number <0 && $n == 0){
        $result = "Nguyen am chan";
    } else {
        $result = "Nguyen am le";
    }

    echo $result;
?>