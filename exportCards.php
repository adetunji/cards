<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "/includes/cardInfo.php";

header("Content-type: application/xml");
echo exportCards();

