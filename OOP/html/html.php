<?php

class HTML_Generator {
    public function render_input($data) {
        foreach ($data as $row) {
            echo "<label>{$row['name']}</label>";
            echo "<input type='text' value='{$row['name']}'><br>";
            
            echo "<label>{$row['price']}</label>";
            echo "<input type='text' value='{$row['price']}'><br>";
            
            echo "<label>{$row['stocks']}</label>";
            echo "<input type='text' value='{$row['stocks']}'><br><br>";
        }
    }

    public function render_list($items, $listType) {
        if ($listType === 'unordered') {
            echo "<ul>";
            foreach ($items as $item) {
                echo "<li>{$item}</li>";
            }
            echo "</ul>";
        } elseif ($listType === 'ordered') {
            echo "<ol>";
            foreach ($items as $item) {
                echo "<li>{$item}</li>";
            }
            echo "</ol>";
        } else {
            echo "Invalid list type. Please use 'unordered' or 'ordered'.";
        }
    }
}

$html_generator = new HTML_Generator();

$input_data = [
    ["name" => "Bag", "price" => "250", "stocks" => "10"],
    ["name" => "Shoes", "price" => "120", "stocks" => "15"],
    
];
$html_generator->render_input($input_data);


$list_items = ["Apple", "Banana", "Cherry"];
$html_generator->render_list($list_items, "unordered");
$html_generator->render_list($list_items, "ordered");

?>
