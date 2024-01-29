<?php
    ini_set('auto_detect_line_endings', true);
    $csvFile = fopen('us-500.csv', 'r');
    if ($csvFile !== FALSE) {
        $rowNumber = 0;
        echo '<table border="1">';
        while (($data = fgetcsv($csvFile)) !== FALSE) {
            $rowNumber++;
            $rowStyle = ($rowNumber % 10 === 0) ? 'style="background-color: #f0f0f0;"' : '';
            echo '<tr ' . $rowStyle . '>';
            foreach ($data as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        fclose($csvFile);
    } else {
        echo 'Error opening CSV file.';
    }
?>
