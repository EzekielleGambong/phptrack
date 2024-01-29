<?php
session_start();
// var_dump($_SESSION['money']);
// $_SESSION = array();

if (!isset($_SESSION['money'])) {
    $_SESSION['money'] = 500;
    
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    switch ($action) {
        case 'Low Risk':
            $earnings = rand(-25, 100);
            $_SESSION['money'] += $earnings;
            $_SESSION['activity'] = "You found gold and earned $earnings!";
            break;

        case 'Moderate Risk':
            $earnings = rand(-100, 1000);
            if ($earnings < 0) {
                $_SESSION['money'] += $earnings;
                $_SESSION['activity'] = "You gambled and lost $earnings!";
            } else {
                $_SESSION['money'] += $earnings;
                $_SESSION['activity'] = "You gambled and won $earnings!";
            }
            break;

        case 'High Risk':
            
            $amount = rand(-500, 2500);
            if ($amount < 0) {
                $_SESSION['money'] += $amount;
                $_SESSION['activity'] = "You gambled and lost $amount!";
            } else {
                $_SESSION['money'] += $amount;
                $_SESSION['activity'] = "You gambled and won $amount!";
            }
            break;

        case 'Severe Risk':
            $amount = rand(-3000, 5000);
            if ($amount < 0) {
                $_SESSION['money'] += $amount;
                $_SESSION['activity'] = "You gambled and lost $amount!";
            } else {
                $_SESSION['money'] += $amount;
                $_SESSION['activity'] = "You gambled and won $amount!";
            }
            break;
    }

    
    header('Location: index.php');
    exit;
}
?>
