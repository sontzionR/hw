<?php
include_once 'utils/db.php';
$dataBase = new DataBase();
$query = "SELECT DISTINCT category FROM seforim";
        /*$results = $db->query($query);*/
        $results = $dataBase->getDB()->query($query);
        $returnedCategory = "";
        foreach($results as $cat) {
           
           $returnedCategory .= "<option>{$cat['category']}</option>"; 
        }

        
?>           