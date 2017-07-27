<?php

    include 'db.php';
        // $theSefer = "";
        // if(isset($_POST['name'])){
        //     if(empty($_POST['name'])){
        //         die("enter a valid name and price");
        //     }else{
        //         $theSefer = $_POST['name'];
        //     }
        // }        
        $del = "DELETE FROM seforim WHERE name = :theSefer";
        $statement = $db->prepare($del);
        $statement->bindValue('theSefer',$theSefer);
        $statement->execute();
        
        $query = "SELECT * FROM seforim";
        $results = $db->query($query);
        $returnedSefer = "";
        foreach($results as $sefer) {
        $returnedSefer .= "<option> {$sefer['name']} </option>"; 
        }

?>