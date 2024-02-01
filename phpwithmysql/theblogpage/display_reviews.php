<?php

include('db_connection.php');

$query = "SELECT reviews.*, users.username FROM reviews
          JOIN users ON reviews.user_id = users.id
          ORDER BY created_at DESC";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="review">';
    echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
    echo '<p>By: ' . htmlspecialchars($row['username']) . '</p>';
    echo '<p>' . nl2br(htmlspecialchars($row['content'])) . '</p>';

    $reviewId = $row['id'];
    $replyQuery = "SELECT * FROM replies WHERE review_id = $reviewId ORDER BY created_at ASC";
    $replyResult = mysqli_query($conn, $replyQuery);

    while ($replyRow = mysqli_fetch_assoc($replyResult)) {
        echo '<div class="reply">';
        echo '<p>By: ' . htmlspecialchars($row['username']) . '</p>';
        echo '<p>' . nl2br(htmlspecialchars($replyRow['content'])) . '</p>';
        echo '</div>';
    }

    echo '</div>';
}

mysqli_close($conn);
?>
