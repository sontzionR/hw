<?php

    $cs = "mysql:host=localhost;dbname=recipes2";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected<br/>";
        $query = "SELECT f.name,f.url,i.ingredients FROM food f JOIN recipes r ON  r.foodId = f.id JOIN ingredents i ON i.id = r.ingredientId";
        $results = $db->query($query);
        $ingr = $results->fetchAll(PDO::FETCH_ASSOC);
        
        echo json_encode($ingr);
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }
   
    
?>