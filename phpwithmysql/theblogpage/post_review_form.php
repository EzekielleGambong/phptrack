<?php 
include('db_connection.php');

$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);


?>

<html>
    <h1>Leave a review</h1>
    <form action="insertreview.php" method="post">
            <textarea name="leaveReview" ></textarea>
            <input type="submit" value="Comment" >
    </form>
    <br><br><br><br>

<?php       if ($result->num_rows > 0) { ?>
                <div>
<?php               while ($row = $result->fetch_assoc()) { ?>
                        <p> Reviewed by: <?= $row['author']; ?> <span> <?= $row['created_at'] ?></p>
                        <p> Comment: <?= $row['content']; ?>  </p>
                        <form action="reply_review.php" method="post" >
                            <textarea name="replyArea" ></textarea>
                            <input type="submit" value="Reply">
                        </form>
                        <br>
<?php               } ?>
                </div>
<?php         } else { ?>
                    <p>No entries found.</p>
<?php       } ?>
      
</html>