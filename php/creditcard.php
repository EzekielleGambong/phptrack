<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Credit Card</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .highlighted{
                background-color: gray;
            }
        </style>
    </head>
    <body>
        <?php
            $users = array( 
                array('cardholder_name' => "Michael Choi", 'cvc' => 123, 'acc_num' => '1234 5678 976 5432'),
                array('cardholder_name' => "John Supsupin", 'cvc' => 789, 'acc_num' => '001 1200 1500 1510'),
                array('cardholder_name' => "KB Tonel", 'cvc' => 567, 'acc_num' => '4568 456 13 5214'),
                array('cardholder_name' => "Mark Guillen", 'cvc' => 345, 'acc_num' => '1234 1234 1234 1234'),
                array('cardholder_name' => "Ezi Gambong", 'cvc' => 456, 'acc_num' => '9876 5432 1098 7654'),
                array('cardholder_name' => "Rosaemarie Aspa", 'cvc' => 135, 'acc_num' => '2345 6789 0123 4567'),
                array('cardholder_name' => "Angelo Salvadora", 'cvc' => 723, 'acc_num' => '70 1234 5678 9012'),
                array('cardholder_name' => "Nicole Manila", 'cvc' => 194, 'acc_num' => '3456 7890 1234 5678'),
                array('cardholder_name' => "James Yap", 'cvc' => 534, 'acc_num' => '8765 4321 0987 6433')
            );

            $idnumber = 1;

            function countDigits($string) {
                return strlen(preg_replace('/\s+/', '', $string));
            }

            
            echo '<table border="1">';
            echo 
                '<tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Name in uppercase</th>
                    <th>Account Number</th>
                    <th>CVC</th>
                    <th>Full Account</th>
                    <th>Length of full account</th>
                    <th>Is valid</th>
                </tr>';

            foreach ($users as $key => $user) {
                $rowClass = ($key % 3 == 2) ? 'highlighted' : '';
                $upper =strtoupper($user['cardholder_name']);
                $fullacc = $user['acc_num'] . ' ' . $user['cvc'];
                $length = strlen(str_replace(' ', '', $fullacc));
                if ($length == 19) {
                    $isvalid = "yes";
                }
                else{
                    $isvalid = "no";
                }
                echo "<tr class='$rowClass'>";
                echo "<td >$idnumber </td>";
                echo '<td>' . $user['cardholder_name'] . '</td>';
                echo "<td> $upper </td>";
                echo '<td>' . $user['acc_num'] . '</td>';
                echo '<td>' . $user['cvc'] . '</td>';
                echo "<td> $fullacc </td>";
                echo "<td> $length </td>";
                echo "<td> $isvalid </td>";
                echo '</tr>';
            }
            
            echo '</table>';
        ?>
    </body>
</html>
