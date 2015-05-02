<?php

require_once "dbconfig.php";

function getAllCards(){
    try{
        $ds = "mysql:dbhost=" . DBHOST 
                . ";dbname=" . DBNAME;
        
        $pdo = new PDO($ds, DBUSER, DBPASS);
        
        $stmt = $pdo->prepare("SELECT * FROM creditcard "
                . "ORDER BY CardNumber");
        $stmt->execute();
        $pdo = null;
        return $stmt;
        
        
    } catch (Exception $ex) {
        echo "PDOException: " + $ex->getMessage();
    }
}

function updateExpiry($cardNo, $newExpM, $newExpY){
    try {
        $ds = "mysql:dbhost=" . DBHOST 
                . ";dbname=" . DBNAME;
        
        $pdo = new PDO($ds, DBUSER, DBPASS);
        
        $stmt = $pdo->prepare("UPDATE creditcard " .
                "SET ExpiryMonth = ? , ExpiryYear = ? " .
                "WHERE CardNumber = ? ");
        
        $stmt->bindParam(1, $newExpM);
        $stmt->bindParam(2, $newExpY);
        $stmt->bindParam(3, $cardNo);

        $stmt->execute();

        $pdo = null;
        
        if ($stmt->rowCount() > 0) {
            return true;
        } 
    } catch (Exception $ex) {
        echo "PDOException: " . $ex->getMessage();
    }
    return false;
}
