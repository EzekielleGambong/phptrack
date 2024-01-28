<?php
header('Content-type: application/x-javascript');

// Generate a random multiplier
$multiplier = rand(10, 20);
?>

$(document).ready(function(){
  console.log("You are <?php echo $multiplier; ?>x better than before!");
});
