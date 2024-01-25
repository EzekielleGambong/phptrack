<?php

    $cards = array("King" => 13, "Queen" => 12, "Jack" => 11, "Ace" => 1);
    function print_card_info($cards)
    {
        echo "List of keys in the array:<br>";
        foreach (array_keys($cards) as $value) {
            echo "<li>$value</li>\n";
        }
        echo "</ol><br><br>";

        foreach ($cards as $card => $value) {
            echo "The value of $card in Pyramid Solitaire is $value.<br>";
        }
    }

    print_card_info($cards);

?>
