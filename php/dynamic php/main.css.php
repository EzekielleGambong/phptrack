<?php
header('Content-type: text/css');

$pFontSize = rand(10, 20);
$emFontSize = rand(30, 50);

$pColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
$emColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
?>


p {
    font-size: <?php echo $pFontSize; ?>px;
    color: <?php echo $pColor; ?>;
}

em {
    font-size: <?php echo $emFontSize; ?>px;
    color: <?php echo $emColor; ?>;
}
