<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "/includes/dbfunctions.php";
        
        if(isset($_POST["cardNum"])){
            $cardNum= $_POST["cardNum"];
        }else {
            $cardNum = "";
        }
        if(isset($_POST["newExpMonth"])){
            $newExpMonth = $_POST["newExpMonth"];
        }else {
            $newExpMonth = "";
        }
        
        if(isset($_POST["newExpYear"])){
            $newExpYear = $_POST["newExpYear"];
        }else {
            $newExpYear = "";
        }
         $success = updateExpiry($cardNum, $newExpMonth, $newExpYear);
        
        if ($success) {
            echo "<h1 style='color:green'>Expiry date of $cardNum updated. </h1>";
        } else {
            echo "<h1 style='color:red'>Update date of $cardNum could not"
                    . " be updated.</h1>";
        }
         
        ?>
        <a href="index.php">Back to index</a>
    </body>
</html>
