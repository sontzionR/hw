<?php
include 'utils/db.php';
$query = "SELECT DISTINCT category FROM seforim";
        $results = $db->query($query);
        $returnedCategory = "";
        foreach($results as $cat) {
           
           $returnedCategory .= "<option>{$cat['category']}</option>"; 
        }

        
?>           