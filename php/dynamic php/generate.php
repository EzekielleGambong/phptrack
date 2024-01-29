<?php

    header('Content-type: image/png');

    $image = imagecreatetruecolor(300, 150);
    $background_color = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $background_color);


    $text_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));

    $ticketNumber = rand(10000, 99999);

    imagestring($image, 5, 20, 60, "Ticket Number: $ticketNumber", $text_color);

    imagepng($image);
    imagedestroy($image);
?>
