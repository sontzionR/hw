<?php

    include 'db.php';
        echo "Connected<br/>";
         $query = "SELECT * FROM seforim";
        $results = $db->query($query);
        $returnedSefer = "";
        foreach($results as $sefer) {
           $returnedSefer .= "<option> {$sefer['name']} </option>"; 
        }
        if(isset($_GET['name'])){
            $theSefer = $_GET['name'];
       
        
        $query = "SELECT * FROM seforim  WHERE name = '$theSefer'";
        $results = $db->query($query);
        $selectedReturnedSefer = "";
        $seferPrice = "";
        foreach($results as $sefer) {
            $selectedReturnedSefer .= $sefer['name']; 
            $seferPrice .= $sefer['price'];
        }
         }
?>