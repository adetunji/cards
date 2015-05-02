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
        <h1 style="text-align:center;color:green">
            Credit Card Database
        </h1>
        <h2 style="text-align:center;color:black;font-size: larger ">
            Update Expiry Date
        </h2>
        
        <form action="updateDate.php" method="POST">
            <table style="margin-left:auto;margin-right:auto">
                <tr>
                    <td>Enter Card #:</td>
                    <td><input type="text" name="cardNum"/></td>
                </tr>
                <tr>
                    <td>Enter new expiry month:</td>
                    <td><input type="text" name="newExpMonth"/></td>
                </tr>
                <tr>
                    <td>Enter new expiry year:</td>
                    <td><input type="text" name="newExpYear"/></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center">
                        <input type="submit" value="Update Card"/>
                    </td>
                </tr>
            </table>
        </form>
        <h3 style="text-align:center;color:black;font-size: larger ">
            <p>
            Export Credit Card List
            <div><a href="exportCards.php">Export Credit Cards</a></div>
            <p>
             Display List of Credit Cards   
            <div><a href="displayCards.php">Display List of Credit Cards</a></div>
        </h3>
        
        <?php
           
           
            
        // put your code here
        ?>
    </body>
</html>



