<?php 
    session_start();
    var_dump($_SESSION);
    // $_SESSION = array();
    $customerLeft = 10;
    $coupon = 0;
?>
<html>
    <head>
        <title>Free Coupons</title>
        <style>
            .wrapper{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <?php 
                if (isset($_SESSION['counter'])) {
                    
                    if ($customerLeft == 1){
                        $customerLeft = 10;
                        $coupon = 1;
                    } else {
                        $customerLeft = $customerLeft - $_SESSION['counter'];
                        $coupon = 2;
                    }
                    
                }
                switch ($coupon) {
                    case '1':
                        echo'unavail';
                        break;

                    case '2':
                        echo'avail';
                        break;
                    default:
                }
            ?>
        <div class="wrapper">
            <h1>Welcome Customer</h1>
            <p>We're giving away free coupons<br>as token of appreciation<br></p> 
            <p>for first <?= $customerLeft ?> customer(s)</p>
        
            <form action="discounted.php" method="post">
                <label for="name">Kindly type your name</label><br>
                <input type="text" id="name" name="name"><br>
                <input type="submit">
            </form>
            
            
        </div>
    </body>
</html>