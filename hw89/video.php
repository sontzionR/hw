<?php

    $cs = "mysql:host=localhost;dbname=videos";
    $user = "test";
    $password = 'password';

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $db = new PDO($cs, $user, $password, $options);
        //echo "Connected<br/>";
        $query = "SELECT * FROM videos";
        $results = $db->query($query);
        $vids = $results->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($vids);
    } catch(PDOException $e) {
        die("Something went wrong " . $e->getMessage());
    }

?>