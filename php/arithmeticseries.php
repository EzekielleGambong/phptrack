<?php

    $arraynumbers = [2, 5, 8, 11, 14];
    $sum = 0;

    echo "Arithmetic Series: ";
    foreach ($arraynumbers as $number) {
        echo $number . " ";
    }
    echo "<br>";
    foreach ($arraynumbers as $value) {
        $sum += $value;
    }
    echo "Sum of the Series: $sum\n";

?>
