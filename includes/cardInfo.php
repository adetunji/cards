<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'dbfunctions.php';

function exportCards(){
    $doc = new DOMDocument("1.0" , "UTF-8");
    
    
    $stmt = getAllCards();
    
   
    
    $numCards = $stmt->rowCount();
    //Get the result set array of courses
    $results = $stmt->fetchAll();
    
    $root = $doc->createElement("creditCards");
    
  
    $doc->appendChild($root);
    
    
    
    for($i = 0; $i < $numCards; $i++){
        $currentCard = $results[$i];
        
       
        $cardElement = $doc->createElement("card");
        
        
        $cardElement->setAttribute("cardId", $currentCard["CreditCardId"]);
        
        
        
        $numberElement = $doc->createElement("number");
        $numberText =
                $doc->createTextNode($currentCard["CardNumber"]);
       
        $numberElement->appendChild($numberText);
        
        $holderElement = $doc->createElement("holder");
        $holderText =
                $doc->createTextNode($currentCard["CardHolder"]);
        $holderElement->appendChild($holderText);
        
        $typeElement = $doc->createElement("type");
        $typeText =
                $doc->createTextNode($currentCard["CardType"]);
       
        $typeElement->appendChild($typeText);
        
        $expElement = $doc->createElement("expiry");
        
        $monthElement = $doc->createElement("month");
        $monthText = $doc->createTextNode($currentCard["ExpiryMonth"]);
        $monthElement->appendChild($monthText);
        
        $yearElement = $doc->createElement("year");
        $yearText = $doc->createTextNode($currentCard["ExpiryYear"]);
        $yearElement->appendChild($yearText);
        
        $expElement->appendChild($monthElement);
        $expElement->appendChild($yearElement);        
                
        $cardElement->appendChild($numberElement);
        $cardElement->appendChild($holderElement);
        $cardElement->appendChild($typeElement);
        $cardElement->appendChild($expElement);
        
        $root->appendChild($cardElement);
        
       
        
        
    }//End of for-loop.
    
    //Convert the DOMDocument tree to XML string.
    $xml = $doc->saveXML();
    return $xml;
}