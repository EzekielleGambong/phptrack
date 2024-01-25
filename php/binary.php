<?php

    function get_count($array)
    {
        $count = array("zeroes" => 0, "ones" => 0);

        foreach ($array as $value) {
            if ($value == 0) {
                $count["zeroes"]++;
            } elseif ($value == 1) {
                $count["ones"]++;
            }
        }

        return $count;
    }

    $binary = array(1, 1, 0, 1, 1, 0, 1);
    $output = get_count($binary);

    var_dump($output);

?>
