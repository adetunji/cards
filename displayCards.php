<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sheridan Bookstore</title>
    </head>
    <body>
        <h1 style="text-align:center;color:maroon;">
            Credit Card List
        </h1>
        <table border="1" cellspacing="5"
               cellpadding="5" 
               style="margin-left:auto;margin-right:auto">
            <tr>
                <th>Card #</th>
                <th>Type</th>
                <th>Name on Card</th>
                <th> Expiry Date </th>
            </tr>
        <?php
        // Include the database functions file
        require_once "/includes/dbfunctions.php";
        
        // Get the result set of all books
        $stmt = getAllCards();
        
        // Get the number of records in the result set
        $numRows = $stmt->rowCount();
        
        // Get the result set array of books
        $results = $stmt->fetchAll();
        
        // Loop through the array of books, displaying
        // each book on a separate row
        for ($i = 0; $i < $numRows; $i++) {
            // Get the ith record in the results
            $currentCard = $results[$i];
            
            // Display the values of each column on a 
            // separate row of the table.
            // $currentBook is an associative array
            // with the indices being the column names
            echo "<tr>";
            echo "<td>" . $currentCard["CardNumber"] . "</td>";
            echo "<td>" . $currentCard["CardType"] . "</td>";
            echo "<td>" . $currentCard["CardHolder"] . "</td>";
            echo "<td>" . $currentCard["ExpiryMonth"] . "/" . $currentCard["ExpiryYear"] . "</td>";
            
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>
