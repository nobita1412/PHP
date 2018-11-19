<?php
    $number = 12.34;
    $number_2 = 12.34;

    echo (int)$number;

    settype($number_2,"integer");
    echo "<br>".$number_2;
?>