<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bingo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bingostyle.css">
    </head>
    <body>
        
        <table>
            <thead>
                <tr class='blue'>
                    <th>
                        B
                    </th>
                    <th>
                        I
                    </th>
                    <th>
                        N
                    </th>
                    <th>
                        G
                    </th>
                    <th>
                        O
                    </th>
                </tr>
            </thead>
                
            <tbody>
                <?php
                    echo "<tr class='red'>";
                        for ($value = 2; $value <= 10; $value+=2) { 
                            echo "<td>$value</td>";
                        }   
                    echo "</tr>";
                    echo "<tr class='blue'>";
                        for ($value = 3; $value <= 15; $value+=3) { 
                            echo "<td>$value</td>";
                        }   
                    echo "</tr>";
                    echo "<tr class='red'>";
                        for ($value = 4; $value <= 20; $value+=4) { 
                            echo "<td>$value</td>";
                        }   
                    echo "</tr>";
                    echo "<tr class='blue'>";
                        for ($value = 5; $value <= 25; $value+=5) { 
                            echo "<td>$value</td>";
                        }   
                    echo "</tr>";
                    echo "<tr class='red'>";
                        for ($value = 6; $value <= 30; $value+=6) { 
                            echo "<td>$value</td>";
                        }   
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </body>
</html>