<?php

// Set 'auto_detect_line_endings' to TRUE
ini_set('auto_detect_line_endings', true);

// Open the CSV file
$csvFile = fopen('us-500.csv', 'r');

// Check if the file is opened successfully
if ($csvFile !== FALSE) {

    // Initialize a counter for row numbers
    $rowNumber = 0;

    // Start building the HTML table
    echo '<table border="1">';
    
    // Read the CSV file line by line
    while (($data = fgetcsv($csvFile)) !== FALSE) {

        // Increment the row number
        $rowNumber++;

        // Check if it's the 10th row and apply a light gray background
        $rowStyle = ($rowNumber % 10 === 0) ? 'style="background-color: #f0f0f0;"' : '';

        // Output the table row
        echo '<tr ' . $rowStyle . '>';
        
        // Output the table cells
        foreach ($data as $value) {
            echo '<td>' . $value . '</td>';
        }

        // Close the table row
        echo '</tr>';
    }

    // Close the HTML table
    echo '</table>';

    // Close the CSV file
    fclose($csvFile);

} else {
    // Handle file opening error
    echo 'Error opening CSV file.';
}
?>
