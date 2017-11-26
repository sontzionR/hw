<?php

    $cs = "mysql:host=localhost;dbname=contacts";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected<br/>";
        $query = "SELECT firstName,lastName,email,phone FROM contacts";
        $results = $db->query($query);
        $contacts = $results->fetchAll();
        header('Content-Type: application/json');/*didnt work without this????*/
        echo json_encode($contacts);
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
   
    
?>
