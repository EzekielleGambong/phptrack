<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Drop-down Menus</title>
</head>
<body>

    <?php

        $languages = array('PHP', 'JS', 'Ruby');

        echo "<label>Drop-down using for loop:</label><br>";
        echo "<select>";
        for ($i = 0; $i < count($languages); $i++) {
            echo "<option>{$languages[$i]}</option>";
        }
        echo "</select><br><br>";

        echo "<label>Drop-down using foreach:</label><br>";
        echo "<select>";
        foreach ($languages as $language) {
            echo "<option>$language</option>";
        }
        echo "</select><br><br>";

        array_push($languages, 'HTML', 'CSS');

        echo "<label>Drop-down with 5 unique states:</label><br>";
        echo "<select>";
        foreach (array_unique($languages) as $language) {
            echo "<option>$language</option>";
        }
        echo "</select>";

    ?>

</body>
</html>
