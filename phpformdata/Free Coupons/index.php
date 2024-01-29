<?php 
    session_start();
    var_dump($_SESSION);
    // $_SESSION = array();
    $customerLeft = 10;
    $titleDisc = "";
    $randomNum = "";
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
                    
                    if ($_SESSION['counter'] == 9){
                        $titleDisc = "Sorry";
                        $randomNum = "Unavailable";

                    } else {
                        $customerLeft = $customerLeft - $_SESSION['counter'];
                        $titleDisc = "50% Discount";
                        $randomNum = rand ( 0000000 , 9999999 );
                    }
                }
                
            ?>
        <div class="wrapper">
            <h1>Welcome Customer</h1>
            <p>We're giving away free coupons<br>as token of appreciation<br></p> 
            <p>for first <?= $customerLeft ?> customer(s)</p>
            
            <form >
                <label for="name">Kindly type your name</label><br>
                <input type="text" id="name" name="name"><br>
                <input type="submit">
            </form>
            
            <div id="coupon" >
                <h3><?= $titleDisc ?> </h3>
                <h1><?= $randomNum ?> </h1>
                <form action="reset.php" method="post">
                    <input  type="submit" value="Reset">
                </form>
                <form action="discounted.php" method="post">
                    <input  type="submit" value="Claim">
                </form>
            </div>
            
        </div>
    </body>
</html>