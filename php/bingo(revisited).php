<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bingo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th, td {
                padding: 10px;
            }
            .red{
                color: red;
            }
            .blue{
                color: blue;
            }   
        </style>
    </head>
    <body>
        
        <h1>BINGO </h1>
        <table>
            <thead>
            </thead>
            <tbody>
                <?php
                    echo "<tr >";
                        $color = "red";
                        for ($value = 2; $value <= 10; $value+=2) { 
                            if ($color == "red") {
                                echo "<td class='red'>$value</td>";
                                $color = "blue";
                            }
                            else {
                                echo "<td class='blue'>$value</td>";
                                $color = "red";
                            }
                        }   
                    echo "</tr>";
                    echo "<tr>";
                        $color = "blue";
                        for ($value = 3; $value <= 15; $value+=3) { 
                            if ($color == "red") {
                                echo "<td class='red'>$value</td>";
                                $color = "blue";
                            }
                            else {
                                echo "<td class='blue'>$value</td>";
                                $color = "red";
                            };
                        }   
                    echo "</tr>";
                    echo "<tr >";
                        $color = "red";
                        for ($value = 4; $value <= 20; $value+=4) { 
                            if ($color == "red") {
                                echo "<td class='red'>$value</td>";
                                $color = "blue";
                            }
                            else {
                                echo "<td class='blue'>$value</td>";
                                $color = "red";
                            }
                        }   
                    echo "</tr>";
                    echo "<tr>";
                        $color = "blue";
                        for ($value = 5; $value <= 25; $value+=5) { 
                            if ($color == "red") {
                                echo "<td class='red'>$value</td>";
                                $color = "blue";
                            }
                            else {
                                echo "<td class='blue'>$value</td>";
                                $color = "red";
                            }
                        }   
                    echo "</tr>";
                    echo "<tr>";
                        $color = "red";
                        for ($value = 6; $value <= 30; $value+=6) { 
                            if ($color == "red") {
                                echo "<td class='red'>$value</td>";
                                $color = "blue";
                            }
                            else {
                                echo "<td class='blue'>$value</td>";
                                $color = "red";
                            }
                        }   
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </body>
</html>