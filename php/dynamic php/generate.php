<?php
// Set the content type
header('Content-type: image/png');

// Create a blank image with a white background
$image = imagecreatetruecolor(300, 150);
$background_color = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $background_color);

// Set a random color for text
$text_color = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));

// Generate a random ticket number
$ticketNumber = rand(10000, 99999);

// Add text to the image
imagestring($image, 5, 20, 60, "Ticket Number: $ticketNumber", $text_color);

// Output the image
imagepng($image);
imagedestroy($image);
?>
