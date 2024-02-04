<?php 
include('db_connection.php');


$sql2 = "SELECT * FROM replies";
$result2 = $conn->query($sql2);
$chooseReps = $_SESSION['search'];
$sql = "SELECT * FROM replies WHERE reviewId='$chooseReps' ";
$result = $conn->query($sql);

// $author = $_SESSION['userName'];
// $reviewId = $_SESSION['userid'];
?>

<html>
    <header>
        <style>
            #aligmentreply{
                text-align: right;
            }
        </style>

    </header>
    <p>ds</p>
    <div id="aligmentreply" >
<?php   while ($row3 = $result->fetch_assoc()) { ?>
            <p> Replied by: <?= $row3['author']; ?> <span> <?= $row3['created_at'] ?></p>
            <p> reply: <?= $row3['content']; ?>  </p>
            <br>
<?php   } ?>
    </div>
</html>

