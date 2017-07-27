<?php
$query = "SELECT DISTINCT category FROM seforim";
        $results = $db->query($query);
        $returnedCategory = "";
        foreach($results as $cat) {
           
           $returnedCategory .= "<option>{$cat['category']}</option>"; 
        }

         $query = "SELECT * FROM seforim";
           if(! empty($category)){
               $query .= " WHERE category='$category'";
           }
?>           