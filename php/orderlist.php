<?php

    $x = array('Spaghetti', 'Pizza', 'Iced tea');
    function print_orders($array)
    {
        echo "<ol>\n";
        foreach ($array as $value) {
            echo "<li>$value</li>\n";
        }
        echo "</ol>";
    }

    print_orders($x);

?>
