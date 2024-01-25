<?php

    $numbers = [13, 143, 88, 65, 120];
    $sum = 0;
    $counter = 0;

    foreach ($numbers as $value) {
        $sum += $value;
        $counter++;
    }

    echo "Numbers inside the array: ";
    foreach ($numbers as $value) {
        echo $value . " ";
    }
    
    $mean = $sum / $counter;
    echo "<br> Mean: $mean\n";
/*10-20 mins*/
?>
