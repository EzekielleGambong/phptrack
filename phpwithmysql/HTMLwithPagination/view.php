<?php
$perPage = 50;

$conn = new mysqli('127.0.0.1', 'root', '', 'htmlpagination');

$fileName = $conn->real_escape_string(urldecode($_GET['file']));


$tableName = 'prefix_' . preg_replace('/[^a-zA-Z0-9]/', '', $fileName);
$result = $conn->query("SELECT COUNT(*) AS total FROM $tableName");

$row = $result->fetch_assoc();
$totalRows = $row['total'];

$totalPages = ceil($totalRows / $perPage);


$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;


$start = ($page - 1) * $perPage;

$data = $conn->query("SELECT * FROM $fileName LIMIT $start, $perPage");

echo '<table>';
while ($row = $data->fetch_assoc()) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

for ($i = 1; $i <= $totalPages; $i++) {
    echo '<a href="view.php?file=' . urlencode($fileName) . '&page=' . $i . '">' . $i . '</a> ';
}

$conn->close();
?>
