<?php

    // function convert_to_blanks($array) {
    //     foreach ($array as $item) {
    //         if (is_int($item)) {
    //             echo str_repeat("_ ", $item);
    //         } elseif (is_string($item)) {
    //             $firstChar = strtoupper(substr($item, 0, 1));
    //             echo $firstChar . str_repeat("_ ", strlen($item) - 1);
    //         }
    //         echo PHP_EOL;
    //     }
    // }

    
    // $list1 = array(6, 1, 3, 5, 7);
    // convert_to_blanks($list1);

    // echo "<br>";

    function convert_to_blanks($array) {
        foreach ($array as $item) {
            if (is_int($item)) {
                echo str_repeat("_ ", $item);
            } elseif (is_string($item)) {
                $firstChar = strtoupper(substr($item, 0, 1));
                echo $firstChar . str_repeat("_ ", strlen($item) - 1);
            }
            echo "<br>";
        }
    }

    
    $list = array(4, "Michael", 3, "Karen", 2, "Rogie");
    convert_to_blanks($list);

?>
