<?php

    for ($num = 1; $num <= 1000; $num++) {
        if ($num % 3 === 0) {
            $message = "Multiple";
        } else {
            $message = "Not multiple";
        }
        echo $num . "=>" . $message . "<br>";
    }

?>
