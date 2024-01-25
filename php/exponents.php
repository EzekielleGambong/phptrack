<?php

    $digits = array(3, 12, 30);

    function exponential($arr)
    {
        $result = array();
        foreach ($arr as $value) {
            $result[] = $value * $value * $value;
        }
        return $result;
        
    }

    $result = exponential($digits);
    var_dump($result);

?>
