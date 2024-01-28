<?php
header('Content-type: text/css');

// Generate random font sizes for p and em tags
$pFontSize = rand(10, 20);
$emFontSize = rand(30, 50);

// Generate random color values for p and em tags
$pColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
$emColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
?>

/* Generated CSS */
p {
    font-size: <?php echo $pFontSize; ?>px;
    color: <?php echo $pColor; ?>;
}

em {
    font-size: <?php echo $emFontSize; ?>px;
    color: <?php echo $emColor; ?>;
}
