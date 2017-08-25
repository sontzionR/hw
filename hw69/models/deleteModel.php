<?php

    include_once 'utils/db.php';
        $dataBase = new DataBase();
        // $theSefer = "";
        // if(isset($_POST['name'])){
        //     if(empty($_POST['name'])){
        //         die("enter a valid name and price");
        //     }else{
        //         $theSefer = $_POST['name'];
        //     }
        // }        
        $del = "DELETE FROM seforim WHERE name = :theSefer";
        /*$statement = $db->prepare($del);*/
        $statement = $dataBase->getDB()->prepare($del);
        $statement->bindValue('theSefer',$theSefer);
        $statement->execute();
        
        include 'filterModel.php';
         $query = "SELECT * FROM seforim";
           if(!empty($category)){
               $query .= " WHERE category='$category'";
           }
        
       /* $results = $db->query($query);*/
        $results = $dataBase->getDB()->query($query);
        $returnedSefer = "";
        foreach($results as $sefer) {
        $returnedSefer .= "<option> {$sefer['name']} </option>"; 
        }

?>