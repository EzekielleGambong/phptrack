<?php 
include('db_connection.php');

$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);


$sql2 = "SELECT * FROM replies";
$result2 = $conn->query($sql2);

$author = $_SESSION['userName'];
// $reviewId = $_SESSION['userid'];


?>

<html>
    <header>
        <style>
                #aligmentreply{
                    text-align: right;
                    background-color: gainsboro;
                }
                
        </style>
    </header>
    <body>
        <h1>Leave a review</h1>
        <form action="insertreview.php" method="post">
            <textarea name="leaveReview" ></textarea>
            <input type="submit" value="Comment" >
        </form>
        <br><br><br><br>

<?php   if ($result->num_rows > 0) { ?>
            <div>
<?php           while ($row = $result->fetch_assoc()) { ?>
                    <p> Reviewed by: <?= $row['author']; ?> <span> <?= $row['created_at'] ?></p>
                    <p> Comment: <?= $row['content']; ?>  </p>
                    <div id="aligmentreply">
<?php                   $chooseRepss = $row['id'];
                        $sqls = "SELECT * FROM replies WHERE reviewId='$chooseRepss' ";
                        $results = $conn->query($sqls);
                        while ($row3 = $results->fetch_assoc()) { ?>
                            <p> Replied by: <?= $row3['author']; ?> <span> <?= $row3['created_at'] ?></p>
                            <p> reply: <?= $row3['content']; ?>  </p>
                            <br>
<?php                   } ?>
                    </div>
                    <form action="reply_review.php" method="post">
                        <textarea name="replyArea"></textarea>
<?php                   $chooseReps = $row['id'];?>
                        <input type="hidden" name="replyId" value="<?= $chooseReps ?>">
                        <input type="submit" value="Reply">
                    </form>
                    <br><br><br><br>
<?php           } ?>

            </div>
<?php   } else { ?>
            <p>No entries found.</p>
<?php   } ?>
    </body>
      
</html>