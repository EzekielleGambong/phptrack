<?php

    $successCount = 0;
    $failCount = 0;

    echo "Practice starts...\n";

    for ($attempt = 1; $attempt <= 1000; $attempt++) {
        $result = rand(0, 1);
        $message = ($result == 1) ? "Success!" : "Epic Fail!";

        if ($result == 1) {
            $successCount++;
        } else {
            $failCount++;
        }

        echo "Attempt #$attempt: Shooting the ball... $message ... ";
        echo "Got $successCount success and $failCount epic fail(s) so far<br>";
    }

    echo "Practice ended.";

?>
